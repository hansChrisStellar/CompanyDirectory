// Variables
let locationRequestedByID = {};

// Ajax the PHP File
const getLocationByID = async (id, mode) => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");

  const data = {
    id: id,
  };

  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Location/getLocationByID.php",
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
      locationRequestedByID = data.data;
      if (mode === "editLocation") {
        document.getElementById("nameLocationEdit").value =
          locationRequestedByID.name;
        document.getElementById("modalEditLocation__BaseColorInput").value =
          locationRequestedByID.color;
      }

      // Name Department
      document.getElementById(
        "locationInformation__topHeader__NameJobBase__Name"
      ).innerHTML = locationRequestedByID.name;

      // Personnels
      document.getElementById("locationsPersonnel").innerHTML =
        locationRequestedByID.dpQuantity;

      // Departments
      document.getElementById("locationsDepartment").innerHTML =
        locationRequestedByID.personnelQuanity;
    })
    .catch((error) => {});

  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
  return locationRequestedByID;
};

// Clear out global Personnel variable
const clearOutLocation = () => {
  locationRequestedByID = {};
  document.getElementById("nameLocationEdit").value = "";
  document.getElementById("modalEditLocation__BaseColorInput").value =
    "#000000";
};

// Send the data to the front-end
export { getLocationByID, locationRequestedByID, clearOutLocation };
