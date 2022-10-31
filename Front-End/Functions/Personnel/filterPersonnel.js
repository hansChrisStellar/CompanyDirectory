import { allPersonels, Personnel, personnelsBase } from "./getAllPersonnel.js";

let upComingFiltersArray = new Array();
let arrayOfIndexes = new Array();

const filterPersonnel = (method) => {
  // Erase the data on the Personnel Base
  document.getElementById("personnelsBase").textContent = "";
  // Filter the all Personels array and push each one of them into the shown array
  let separateTheResultsFromOriginalArray = allPersonels.filter((personnel) => {
    return personnel.department === method.target.innerHTML;
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
  console.log(upComingFiltersArray);
};

const removeFilterPersonnel = (method) => {
  // Erase the data on the Personnel Base
  document.getElementById("personnelsBase").textContent = "";

  // Have an array with all the index
  arrayOfIndexes = upComingFiltersArray.filter((department) => {
    return department.department === method.target.innerHTML;
  });

  // Erase the elements itterating the array of the indexes
  arrayOfIndexes.forEach((index) => {
    upComingFiltersArray = upComingFiltersArray.filter((personnel) => {
      return personnel.department !== index.department;
    });
  });

  // clean the array Of Indexes
  arrayOfIndexes = [];

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

export { filterPersonnel, removeFilterPersonnel };
