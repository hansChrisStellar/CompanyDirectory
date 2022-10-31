// Variables
let departmentRequestedByID;

// Ajax the PHP File
const getDepartmentByID = async (id, mode) => {
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
      if (mode === "editDepartment") {
        document.getElementById("nameDepartmentEdit").value =
          departmentRequestedByID.name;
        document.getElementById("locationIDEdit").value =
          departmentRequestedByID.locationID;
        document.getElementById("modalEditDepartment__BaseColorInput").value =
          departmentRequestedByID.color;
      }
    })
    .catch((error) => {});
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
