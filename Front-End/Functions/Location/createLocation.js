// Variables
let newLocationData = {
  name: "",
  color: "",
};

//  Input Texts
document.querySelector("#nameLocationCreate").addEventListener("input", (a) => {
  newLocationData.name = a.target.value;
});

// Inputs Color
document
  .querySelector("#modalCreateLocation__BaseColorInput")
  .addEventListener("change", (a) => {
    newLocationData.color = a.target.value;
  });

// Fire Create Location Button
document.getElementById("createLocation").addEventListener("click", (e) => {
  e.preventDefault();
  insertLocation(newLocationData);
});
const insertLocation = async (newLocationData) => {
  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Location/createLocation.php",
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
      body: JSON.stringify(newLocationData),
    }
  )
    .then((response) => response.json())
    .then((data) => {
      console.log("Success:", data);
    });
};

// Open Modal Create Location
document
  .getElementById("openModalCreateLocation")
  .addEventListener("click", () => {
    document
      .getElementById("modalCreateLocation")
      .classList.add("modalCreateLocation");
    document
      .getElementById("modalCreateLocation")
      .classList.remove("notVisible");
  });

// Close Modal Create Location
document
  .querySelector("#modalCreateLocation__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document
      .getElementById("modalCreateLocation")
      .classList.remove("modalCreateLocation");
    document.getElementById("modalCreateLocation").classList.add("notVisible");
  });

export { insertLocation };
