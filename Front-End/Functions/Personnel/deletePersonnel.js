import { getAllPersonnel } from "../Personnel/getAllPersonnel.js";
import { getAllDepartment } from "../Department/getAllDepartment.js";
import { getAllLocations } from "../Location/getAllLocations.js";
import {
  personnelRequestedByID,
  clearOutPersonnel,
  getPersonnelByID,
} from "./getPersonnelByID.js";

const deletePersonnel = async (id) => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  const data = {
    idUser: id,
  };

  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Personnel/deletePersonnel.php",
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
      body: JSON.stringify(data),
    }
  )
    .then((response) => response.json())
    .then(async (data) => {
      // Update the global
      await getAllPersonnel();
      await getAllDepartment();
      await getAllLocations();
      // Close Modal Delete
      document.getElementById("modalDelete").classList.remove("modalDelete");
      document.getElementById("modalDelete").classList.add("notVisible");
      // Close Modal Personnel Information
      document
        .getElementById("personnelInformation")
        .classList.remove("personnelInformation");
      document
        .getElementById("personnelInformation")
        .classList.add("personnelInformationNotVisible");
      // Clear the personnel global var
      personnelRequestedByID = {};
    })
    .catch((error) => {
      console.error("Error:", error);
    });
  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

export { deletePersonnel };
