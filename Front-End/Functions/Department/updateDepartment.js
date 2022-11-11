import {
  departmentRequestedByID,
  clearOutDepartment,
  getDepartmentByID,
} from "./getDepartmentByID.js";

import { getAllPersonnel } from "../Personnel/getAllPersonnel.js";
import { getAllDepartment } from "../Department/getAllDepartment.js";
import { getAllLocations } from "../Location/getAllLocations.js";

// Input Texts
document.querySelector("#nameDepartmentEdit").addEventListener("input", (a) => {
  departmentRequestedByID.name = a.target.value;
});
// Inputs Location
document.querySelector("#locationIDEdit").addEventListener("change", (a) => {
  departmentRequestedByID.locationID = a.target.value;
});
// Inputs Color
document
  .querySelector("#modalEditDepartment__BaseColorInput")
  .addEventListener("change", (a) => {
    departmentRequestedByID.color = a.target.value;
  });

// Fire Update Department
document
  .getElementById("updateDepartmentEdit")
  .addEventListener("click", (e) => {
    e.preventDefault();
    updateDepartment(departmentRequestedByID);
  });

const updateDepartment = async (personnelData) => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  // Send the data to the PHP File with Fetch
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Department/updateDepartment.php",
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
      document
        .getElementById("modalEditDepartment")
        .classList.remove("modalEditDepartment");
      document
        .getElementById("modalEditDepartment")
        .classList.add("notVisible");
      // Update the global
      getAllPersonnel();
      getAllDepartment();
      getAllLocations();
      // Update the modal
      getDepartmentByID(departmentRequestedByID.id, "editDepartment");
    });
  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

// Close Modal Edit Department
document
  .querySelector("#modalEditDepartment__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document
      .getElementById("modalEditDepartment")
      .classList.remove("modalEditDepartment");
    document.getElementById("modalEditDepartment").classList.add("notVisible");
  });
