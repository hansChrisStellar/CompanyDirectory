import { allPersonels, Personnel, personnelsBase } from "./getAllPersonnel.js";

let upComingFiltersArray = new Array();
let arrayOfIndexes = new Array();

const filterPersonnel = (method, mode) => {
  // Erase the data on the Personnel Base
  document.getElementById("personnelsBase").textContent = "";
  // Filter the all Personels array and push each one of them into the shown array
  let separateTheResultsFromOriginalArray = allPersonels.filter((personnel) => {
    if (mode === "Location") {
      return personnel.location === method.target.innerHTML;
    }

    if (mode === "Department") {
      return personnel.department === method.target.innerHTML;
    }
  });
  // Push the result into the array shown
  separateTheResultsFromOriginalArray.forEach((newPersonnels) => {
    upComingFiltersArray.push(newPersonnels);
  });
  // Create new classes Personnnel with a forEach on upComingFiltersArray Array Filtered
  upComingFiltersArray.forEach((personnel) => {
    let newPersonnel = new Personnel(
      personnel.id,
      personnel.firstName,
      personnel.lastName,
      personnel.jobTitle,
      personnel.email,
      personnel.department,
      personnel.location,
      personnel.img
    );
    // Create the HTML
    personnelsBase.appendChild(newPersonnel.createHTML());
  });
};

const removeFilterPersonnel = (method, mode) => {
  // Erase the data on the Personnel Base
  document.getElementById("personnelsBase").textContent = "";

  // Have an array with all the index
  arrayOfIndexes = upComingFiltersArray.filter((personnel) => {
    if (mode === "Location") {
      return personnel.location === method.target.innerHTML;
    }

    if (mode === "Department") {
      return personnel.department === method.target.innerHTML;
    }
  });

  // Erase the elements itterating the array of the indexes
  arrayOfIndexes.forEach((index) => {
    upComingFiltersArray = upComingFiltersArray.filter((personnel) => {
      return personnel.department !== index.department;
    });
  });

  // clean the array Of Indexes
  arrayOfIndexes = [];

  // Remove repetitive elements
  upComingFiltersArray = [...new Set(upComingFiltersArray)];

  // *-- Create new classes Personnnel with a forEach on upComingFiltersArray Array Filtered --* //

  // If the filters array is empty
  if (upComingFiltersArray.length === 0) {
    allPersonels.forEach((personnel) => {
      let newPersonnel = new Personnel(
        personnel.id,
        personnel.firstName,
        personnel.lastName,
        personnel.jobTitle,
        personnel.email,
        personnel.department,
        personnel.location,
        personnel.img
      );
      // Create the HTML
      return personnelsBase.appendChild(newPersonnel.createHTML());
    });
  }

  // If there's elements inside the filter array
  upComingFiltersArray.forEach((personnel) => {
    let newPersonnel = new Personnel(
      personnel.id,
      personnel.firstName,
      personnel.lastName,
      personnel.jobTitle,
      personnel.email,
      personnel.department,
      personnel.location,
      personnel.img
    );

    // Create the HTML
    personnelsBase.appendChild(newPersonnel.createHTML());
  });
};

let toggleDepartment = document.querySelector("#toggleDepartment");
let toggleLocation = document.querySelector("#toggleLocation");

// Activate Departments Filtering Buttons
document
  .querySelector(".filterPersonnel__Base__DepartmentSelection__Button")
  .addEventListener("click", (a) => {
    document
      .querySelectorAll(".filterPersonnel__Base__BlockQuoteDepartment__Button")
      .forEach((b) => {
        // Remove the disabled classes for all the buttons
        b.classList.remove("disabled");
        // Assign the disabled status to all the buttons
        if (b.disabled === false) {
          return (b.disabled = true);
        }

        if (b.disabled === true) {
          return (b.disabled = false);
        }
      });
    // Erase the data on the Personnel Base and Arrays
    document.getElementById("personnelsBase").textContent = "";
    arrayOfIndexes = [];
    upComingFiltersArray = [];
    // Create new Personnels on the list
    allPersonels.forEach((personnel) => {
      let newPersonnel = new Personnel(
        personnel.id,
        personnel.firstName,
        personnel.lastName,
        personnel.jobTitle,
        personnel.email,
        personnel.department,
        personnel.location,
        personnel.img
      );
      // Create the HTML
      return personnelsBase.appendChild(newPersonnel.createHTML());
    });

    // Deactivate Location Filtering
    document
      .querySelectorAll(".filterPersonnel__Base__BlockQuoteLocation__Button")
      .forEach((b) => {
        // Remove the disabled classes for all the buttons
        b.classList.remove("disabled");

        // Assign the disabled status to all the buttons
        return (b.disabled = true);
      });

    // Switch Toggle

    toggleLocation.classList.remove("fa-toggle-on");
    toggleLocation.classList.add("fa-toggle-off");

    if (toggleDepartment.classList.contains("fa-toggle-off")) {
      return (
        toggleDepartment.classList.remove("fa-toggle-off"),
        toggleDepartment.classList.add("fa-toggle-on")
      );
    }

    toggleDepartment.classList.remove("fa-toggle-on");
    toggleDepartment.classList.add("fa-toggle-off");
  });

// Activate Locations Filtering Buttons
document
  .querySelector(".filterPersonnel__Base__LocationSelection__Button")
  .addEventListener("click", () => {
    document
      .querySelectorAll(".filterPersonnel__Base__BlockQuoteLocation__Button")
      .forEach((b) => {
        // Remove the disabled classes for all the buttons
        b.classList.remove("disabled");

        // Assign the disabled status to all the buttons
        if (b.disabled === false) {
          return (b.disabled = true);
        }

        if (b.disabled === true) {
          return (b.disabled = false);
        }
      });
    // Erase the data on the Personnel Base and Arrays
    document.getElementById("personnelsBase").textContent = "";
    arrayOfIndexes = [];
    upComingFiltersArray = [];

    // Create new Personnels on the list
    allPersonels.forEach((personnel) => {
      let newPersonnel = new Personnel(
        personnel.id,
        personnel.firstName,
        personnel.lastName,
        personnel.jobTitle,
        personnel.email,
        personnel.department,
        personnel.location,
        personnel.img
      );
      // Create the HTML
      return personnelsBase.appendChild(newPersonnel.createHTML());
    });
    // Deactivate Department Filtering
    document
      .querySelectorAll(".filterPersonnel__Base__BlockQuoteDepartment__Button")
      .forEach((b) => {
        // Remove the disabled classes for all the buttons
        b.classList.remove("disabled");

        // Assign the disabled status to all the buttons
        return (b.disabled = true);
      });

    // Switch Toggle

    toggleDepartment.classList.remove("fa-toggle-on");
    toggleDepartment.classList.add("fa-toggle-off");

    if (toggleLocation.classList.contains("fa-toggle-off")) {
      return (
        toggleLocation.classList.remove("fa-toggle-off"),
        toggleLocation.classList.add("fa-toggle-on")
      );
    }

    toggleLocation.classList.remove("fa-toggle-on");
    toggleLocation.classList.add("fa-toggle-off");
  });

export { filterPersonnel, removeFilterPersonnel };
