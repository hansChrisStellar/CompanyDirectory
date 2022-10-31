import {
  personnelRequestedByID,
  clearOutPersonnel,
} from "./getPersonnelByID.js";

// Inputs Texts
document
  .querySelectorAll("#firstNameEdit, #lastNameEdit, #emailEdit, #jobTitleEdit")
  .forEach((e) => {
    e.addEventListener("input", (a) => {
      if (a.target.id === "firstNameEdit")
        personnelRequestedByID.firstName = a.target.value;
      if (a.target.id === "lastNameEdit")
        personnelRequestedByID.lastName = a.target.value;
      if (a.target.id === "jobTitleEdit");
      personnelRequestedByID.jobTitle = a.target.value;
      if (a.target.id === "emailEdit")
        personnelRequestedByID.email = a.target.value;
    });
  });

// Inputs Dropdowns
document.querySelector("#departmentIDEdit").addEventListener("change", (a) => {
  personnelRequestedByID.departmentID = a.target.value;
});

// Fire Update Personnel
document
  .getElementById("updatePersonnelEdit")
  .addEventListener("click", (e) => {
    e.preventDefault();
    updatePersonnel(personnelRequestedByID);
  });

const updatePersonnel = async (personnelData) => {
  // Send the data to the PHP File with Fetch
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Personnel/updatePersonnel.php",
    {
      method: "POST",
      mode: "cors",
      cache: "no-cache",
      credentials: "same-origin",
      headers: {
        "content-type": "application/json",
      },
      redirect: "follow",
      referrerPolicy: "no-referrer",
      body: JSON.stringify(personnelData),
    }
  )
    .then((response) => response.json())
    .then((data) => {
      console.log("Success:", data);
    });
};

// Close Modal Edit Personnel
document
  .querySelector("#modalEditUser__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document.getElementById("modalEditUser").classList.remove("modalEditUser");
    document.getElementById("modalEditUser").classList.add("notVisible");
    clearOutPersonnel();
  });
