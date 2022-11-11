import {
  clearOutLocation,
  locationRequestedByID,
  getLocationByID,
} from "./getLocationByID.js";

import { getAllPersonnel } from "../Personnel/getAllPersonnel.js";
import { getAllDepartment } from "../Department/getAllDepartment.js";
import { getAllLocations } from "../Location/getAllLocations.js";

// Inputs Texts
document.querySelector("#nameLocationEdit").addEventListener("input", (a) => {
  locationRequestedByID.name = a.target.value;
});

// Inputs Color
document
  .querySelector("#modalEditLocation__BaseColorInput")
  .addEventListener("change", (a) => {
    locationRequestedByID.color = a.target.value;
  });

const updateLocation = async (locationData) => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  // Send the data to the PHP File with Fetch
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Location/updateLocation.php",
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
      body: JSON.stringify(locationData),
    }
  )
    .then((response) => response.json())
    .then((data) => {
      document
        .getElementById("modalEditLocation")
        .classList.remove("modalEditLocation");
      document.getElementById("modalEditLocation").classList.add("notVisible");
      // Update the global
      getAllPersonnel();
      getAllDepartment();
      getAllLocations();
      // Update the modal
      getLocationByID(locationRequestedByID.id, "editLocation");
    });
  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

// Close Modal Edit Department
document
  .querySelector("#modalEditLocation__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document
      .getElementById("modalEditLocation")
      .classList.remove("modalEditLocation");
    document.getElementById("modalEditLocation").classList.add("notVisible");
  });

// Fire Update Location
document.getElementById("EditLocation").addEventListener("click", (e) => {
  e.preventDefault();
  updateLocation(locationRequestedByID);
});
