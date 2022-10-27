import { personnelRequestedByID } from "./getPersonnelByID.js";

// Inputs Texts
document
  .querySelectorAll("#firstName, #lastName, #email, #jobTitle")
  .forEach((e) => {
    e.addEventListener("input", (a) => {
      if (a.target.id === "firstName")
        personnelRequestedByID.firstName = a.target.value;
      if (a.target.id === "lastName")
        personnelRequestedByID.lastName = a.target.value;
      if (a.target.id === "jobTitle")
        personnelRequestedByID.jobTitle = a.target.value;
      if (a.target.id === "email")
        personnelRequestedByID.email = a.target.value;
    });
  });

// Inputs Dropdowns
// document.getElementById('')
//    if (a.target.id === "departmentID") lastName = a.target.value;
//    if (a.target.id === "img") jobTitle = a.target.value;
//    if (a.target.id === "id") email = a.target.value;

document.getElementById("updatePersonnel").addEventListener("click", (e) => {
  e.preventDefault();
  updatePersonnel(personnelRequestedByID);
});

const updatePersonnel = async (personnelData) => {
  // Send the data to the PHP File with Fetch
  const response = await fetch(
    "http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Back-End/Personnel/updatePersonnel.php",
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
