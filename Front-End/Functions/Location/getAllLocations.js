import { getLocationByID } from "./getLocationByID.js";

// Variables
const allLocations = new Array();
const locationBase = document.getElementById("locationsBase");

// Personnel Class
class Location {
  // Personnel innitial information
  constructor(id, name, color, dpQuantity) {
    this.id = id;
    this.name = name;
    this.color = color;
    this.dpQuantity = dpQuantity;
  }

  // Create the HTML of every personnel
  createHTML() {
    const base = document.createElement("div");
    base.classList.add("locationSection__ListOfLocations__BaseLocation");

    // Name
    const nameLocation = document.createElement("h2");
    nameLocation.innerHTML = this.name;

    // Show More Button
    const showMoreButton = document.createElement("button");
    showMoreButton.innerHTML = "Show More";
    showMoreButton.addEventListener("click", () => {
      // Open the modal for location information
      document
        .getElementById("locationInformation")
        .classList.add("locationInformation");
      document
        .getElementById("locationInformation")
        .classList.remove("locationInformationNotVisible");

      // Name Department
      document.getElementById(
        "locationInformation__topHeader__NameJobBase__Name"
      ).innerHTML = this.name;

      // Set the location to a global variable
      getLocationByID(this.id, "editLocation");
    });
    // Append & Return
    base.append(nameLocation, showMoreButton);
    return base;
  }
}

// Ajax the PHP File
const getAllLocations = async () => {
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Location/getAllLocations.php"
  )
    .then((response) => response.json())
    .then((data) => {
      // For each array given
      const eachLocation = data.data.forEach((location) => {
        // Create new object
        let newLocation = new Location(
          location.id,
          location.name,
          location.color,
          location.dpQuantity
        );
        // Create the HTML
        locationBase.appendChild(newLocation.createHTML());
        // Push object into array
        allLocations.push(newLocation);
        // Every location dropdown insert data
        document
          .querySelectorAll("#locationIDCreate, #locationIDEdit")
          .forEach((d) => {
            let newOptionDropdownDepartment = document.createElement("option");
            newOptionDropdownDepartment.value = location.id;
            newOptionDropdownDepartment.innerHTML = location.name;
            d.appendChild(newOptionDropdownDepartment);
          });
        // Create Buttons For Filtering Data
        let newSelectFilteringElement = document.createElement("button");
        newSelectFilteringElement.textContent = location.name;
        newSelectFilteringElement.classList.add(
          "filterPersonnel__Base__BlockQuoteLocation__Button"
        );
        newSelectFilteringElement.addEventListener("click", () => {
          console.log("hoas");
        });
        document
          .querySelector("#filterPersonnel__Base__BlockQuoteLocation")
          .appendChild(newSelectFilteringElement);
      });
      return allLocations;
    })
    .catch((error) => {});
};

// Search Function Location
document
  .querySelector("#locationSection__SearchBar__Input")
  .addEventListener("input", (a) => {
    searchLocation(a.target.value);
  });

const searchLocation = (value) => {
  // Erase the data on the Location Base
  document.getElementById("locationsBase").textContent = "";
  // Filter the allLocations with the value passed
  let newLocationArray = allLocations.filter((location) => {
    return location.name.toLowerCase().includes(value.toLowerCase());
  });
  // Create new classes Locaation with a forEach on newLocationArray Array Filtered
  newLocationArray.forEach((location) => {
    let newLocation = new Location(
      location.id,
      location.name,
      location.color,
      location.dpQuantity
    );
    // Create the HTML
    locationBase.appendChild(newLocation.createHTML());
  });
};

// Send the data to the front-end
export { getAllLocations, allLocations };
