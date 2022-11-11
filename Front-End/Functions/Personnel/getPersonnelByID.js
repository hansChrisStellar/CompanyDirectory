// Variables
let personnelRequestedByID = {};

// Ajax the PHP File
const getPersonnelByID = async (id, mode) => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  const data = {
    id: parseInt(id),
  };
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Personnel/getPersonnelByID.php",
    {
      method: "POST",
      body: JSON.stringify(data),
      headers: {
        "content-type": "application/json",
      },
      mode: "cors",
      cache: "no-cache",
      credentials: "same-origin",
      redirect: "follow",
      referrerPolicy: "no-referrer",
    }
  )
    .then((response) => response.json())
    .then((data) => {
      personnelRequestedByID = data.data.personnel[0];
      if (mode === "editPersonnel") {
        document.getElementById("firstNameEdit").value =
          personnelRequestedByID.firstName;
        document.getElementById("lastNameEdit").value =
          personnelRequestedByID.lastName;
        document.getElementById("jobTitleEdit").value =
          personnelRequestedByID.jobTitle;
        document.getElementById("emailEdit").value =
          personnelRequestedByID.email;
        document.getElementById("departmentIDEdit").value =
          personnelRequestedByID.departmentID;

        // Modal Information
        // Image
        document
          .getElementById("personnelInformation__topHeader__Img")
          .setAttribute("src", personnelRequestedByID.img);

        // First Name
        document.getElementById(
          "personnelInformation__topHeader__NameJobBase__Name"
        ).innerHTML = personnelRequestedByID.firstName;

        // Second Name
        document.getElementById(
          "personnelInformation__topHeader__NameJobBase__Job"
        ).innerHTML = personnelRequestedByID.jobTitle;

        // Annual Salary
        document.getElementById("annualSalaryPersonnel").innerHTML =
          personnelRequestedByID.annualSalary;

        // Revenue
        document.getElementById("revenue").innerHTML =
          personnelRequestedByID.revenue;

        // Location
        document.getElementById("locationPersonnel").innerHTML =
          personnelRequestedByID.location;

        // Department
        document.getElementById("departmentPersonnel").innerHTML =
          personnelRequestedByID.department;
      }
    })
    .catch((error) => {});

  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

// Clear out global Personnel variable
const clearOutPersonnel = () => {
  personnelRequestedByID = {};
  document.getElementById("firstNameEdit").value = "";
  document.getElementById("lastNameEdit").value = "";
  document.getElementById("jobTitleEdit").value = "";
  document.getElementById("emailEdit").value = "";
  document.getElementById("departmentIDEdit").value = 1;
};

// Send the data to the front-end
export { getPersonnelByID, personnelRequestedByID, clearOutPersonnel };
