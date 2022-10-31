// Variables

let newDepartmentData = {
  name: "",
  locationID: "",
  color: "#000000",
};
// Input Texts
document
  .querySelector("#nameDepartmentCreate")
  .addEventListener("input", (a) => {
    newDepartmentData.name = a.target.value;
  });
// Inputs Location
document.querySelector("#locationIDCreate").addEventListener("change", (a) => {
  newDepartmentData.locationID = a.target.value;
});
// Inputs Color
document
  .querySelector("#modalCreateDepartment__BaseColorInput")
  .addEventListener("change", (a) => {
    newDepartmentData.color = a.target.value;
  });

// Fire Create Department Button
document.getElementById("createDepartment").addEventListener("click", (e) => {
  e.preventDefault();
  insertDepartment(newDepartmentData);
});
const insertDepartment = async (newDepartmentData) => {
  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Department/createDepartment.php",
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
      body: JSON.stringify(newDepartmentData),
    }
  )
    .then((response) => response.json())
    .then((data) => {
      console.log("Success:", data);
    });
};

// Open Modal Create Department
document
  .getElementById("openModalCreateDepartment")
  .addEventListener("click", () => {
    document
      .getElementById("modalCreateDepartment")
      .classList.add("modalCreateDepartment");
    document
      .getElementById("modalCreateDepartment")
      .classList.remove("notVisible");
  });

// Close Modal Create Department
document
  .querySelector("#modalCreateDepartment__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document
      .getElementById("modalCreateDepartment")
      .classList.remove("modalCreateDepartment");
    document
      .getElementById("modalCreateDepartment")
      .classList.add("notVisible");
  });

export { insertDepartment };
