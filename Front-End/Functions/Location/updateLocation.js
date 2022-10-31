import { clearOutLocation, locationRequestedByID } from "./getLocationByID.js";

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
  console.log(locationData);
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
      console.log("Success:", data);
    });
};

// Close Modal Edit Department
document
  .querySelector("#modalEditLocation__BaseNavButtonGoBack")
  .addEventListener("click", () => {
    document
      .getElementById("modalEditLocation")
      .classList.remove("modalEditLocation");
    document.getElementById("modalEditLocation").classList.add("notVisible");
    clearOutLocation();
  });

// Fire Update Location
document.getElementById("EditLocation").addEventListener("click", (e) => {
  e.preventDefault();
  updateLocation(locationRequestedByID);
});
