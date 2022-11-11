// Variables
let departmentRequestedByID = {};

// Ajax the PHP File
const getDepartmentByID = async (id, mode) => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");

  const data = {
    id: id,
  };

  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Department/getDepartmentByID.php",
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
      departmentRequestedByID = data.data[0];
      console.log(departmentRequestedByID);
      if (mode === "editDepartment") {
        document.getElementById("nameDepartmentEdit").value =
          departmentRequestedByID.name;
        document.getElementById("locationIDEdit").value =
          departmentRequestedByID.locationID;
        document.getElementById("modalEditDepartment__BaseColorInput").value =
          departmentRequestedByID.color;
      }
      // Name Department
      document.getElementById(
        "departmentInformation__topHeader__NameJobBase__Name"
      ).innerHTML = departmentRequestedByID.name;

      // Personnels
      document.getElementById("departmentPersonnels").innerHTML =
        departmentRequestedByID.empNmbr;

      // Location
      document.getElementById("departmentLocation").innerHTML =
        departmentRequestedByID.location;
    })
    .catch((error) => {});

  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

// Clear out global Personnel variable
const clearOutDepartment = () => {
  departmentRequestedByID = {};
  document.getElementById("nameDepartmentEdit").value = "";
  document.getElementById("locationIDEdit").value = 1;
  document.getElementById("modalEditDepartment__BaseColorInput").value =
    "#000000";
};

// Send the data to the front-end
export { getDepartmentByID, departmentRequestedByID, clearOutDepartment };
