import { getAllPersonnel } from "../Personnel/getAllPersonnel.js";
import { getAllDepartment } from "../Department/getAllDepartment.js";
import { getAllLocations } from "../Location/getAllLocations.js";
import { departmentRequestedByID } from "./getDepartmentByID.js";
const deleteDepartment = async (id) => {
  const data = {
    id: id,
  };
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Department/deleteDepartmentByID.php",
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
        .getElementById("departmentInformation")
        .classList.remove("departmentInformation");
      document
        .getElementById("departmentInformation")
        .classList.add("departmentInformationNotVisible");
      // Clear the personnel global var
      departmentRequestedByID = {};
    })
    .catch((error) => {
      console.error("Error:", error);
    });
  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

export { deleteDepartment };
