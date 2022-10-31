// Variables
let locationRequestedByID;

// Ajax the PHP File
const getLocationByID = async (id, mode) => {
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
      if (mode === "editLocation") {
        document.getElementById("nameLocationEdit").value =
          locationRequestedByID.name;
        document.getElementById("modalEditLocation__BaseColorInput").value =
          locationRequestedByID.color;
      }
      locationRequestedByID = data.data;
    })
    .catch((error) => {});

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
