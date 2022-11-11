import { getAllPersonnel } from "../Personnel/getAllPersonnel.js";
import { getAllDepartment } from "../Department/getAllDepartment.js";
import { getAllLocations } from "../Location/getAllLocations.js";
import { locationRequestedByID } from "./getLocationByID.js";

const deleteLocation = async (id) => {
  const data = {
    id: id,
  };
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Location/deleteLocation.php",
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
        .getElementById("locationInformation")
        .classList.remove("locationInformation");
      document
        .getElementById("locationInformation")
        .classList.add("locationInformationNotVisible");
      // Clear the personnel global var
      locationRequestedByID = {};
    })
    .catch((error) => {
      console.error("Error:", error);
    });
  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

export { deleteLocation };
