import {
  departmentRequestedByID,
  clearOutDepartment,
} from "./getDepartmentByID.js";

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
      console.log("Success:", data);
    });
};

// Close Modal Edit Department
document
  .querySelector("#modalEditDepartment__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document
      .getElementById("modalEditDepartment")
      .classList.remove("modalEditDepartment");
    document.getElementById("modalEditDepartment").classList.add("notVisible");
    clearOutDepartment();
  });
