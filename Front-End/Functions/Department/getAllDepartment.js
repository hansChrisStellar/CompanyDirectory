import { getDepartmentByID } from "./getDepartmentByID.js";
import {
  filterPersonnel,
  removeFilterPersonnel,
} from "../Personnel/filterPersonnel.js";
import { getLocationByID } from "../Location/getLocationByID.js";

// Variables
const allDepartments = new Array();
const departmentsBase = document.getElementById("departmentsBase");

// Personnel Class
class Department {
  // Personnel innitial information
  constructor(id, name, locationID, color, empNmbr, location) {
    this.id = id;
    this.name = name;
    this.locationID = locationID;
    this.color = color;
    this.empNmbr = empNmbr;
    this.location = location;
  }

  // Create the HTML of every personnel
  createHTML() {
    const base = document.createElement("div");
    base.classList.add("departmentSection__ListOfDepartments__BaseDepartment");

    // Name
    const nameDepartment = document.createElement("h2");
    nameDepartment.innerHTML = this.name;

    // Show More Button
    const showMoreButton = document.createElement("button");
    showMoreButton.innerHTML = "<i class='fa-solid fa-caret-down'></i>";
    showMoreButton.addEventListener("click", () => {
      // Open the modal for department information
      document
        .getElementById("departmentInformation")
        .classList.add("departmentInformation");
      document
        .getElementById("departmentInformation")
        .classList.remove("departmentInformationNotVisible");

      // set the department to a global variable
      getDepartmentByID(this.id, "editDepartment");
    });

    // Create Buttons on Filter Personnel

    // Append & Return
    base.append(nameDepartment, showMoreButton);
    return base;
  }
}

// Ajax the PHP File
const getAllDepartment = async () => {
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Department/getAllDepartments.php"
  )
    .then((response) => response.json())
    .then((data) => {
      // Clear all the dropdowns first
      document.querySelector("#departmentIDCreate").innerHTML = "";
      document.querySelector("#departmentIDEdit").innerHTML = "";
      // Clear all the filters
      document.querySelector(
        "#filterPersonnel__Base__BlockQuoteDepartment"
      ).innerHTML = "";
      departmentsBase.innerHTML = "";
      // For each array given
      const eachDepartment = data.data.forEach(async (department) => {
        // Create new object
        let newDepartment = new Department(
          department.id,
          department.name,
          department.locationID,
          department.color,
          department.empNmbr,
          department.location
        );
        // Create the HTML
        departmentsBase.appendChild(newDepartment.createHTML());
        // Push object into array
        allDepartments.push(newDepartment);

        // Every department dropdown insert data
        document
          .querySelectorAll("#departmentIDCreate, #departmentIDEdit")
          .forEach((d) => {
            let newOptionDropdownDepartment = document.createElement("option");
            newOptionDropdownDepartment.value = department.id;
            newOptionDropdownDepartment.innerHTML = department.name;
            d.appendChild(newOptionDropdownDepartment);
          });
        // Create Buttons For Filtering Data
        let newSelectFilteringElement = document.createElement("button");
        newSelectFilteringElement.textContent = department.name;
        newSelectFilteringElement.classList.add(
          "filterPersonnel__Base__BlockQuoteDepartment__Button"
        );
        newSelectFilteringElement.disabled = true;
        newSelectFilteringElement.addEventListener("click", (a) => {
          // If the button is disabled
          if (
            newSelectFilteringElement.classList.contains("disabled") === true
          ) {
            removeFilterPersonnel(a, "Department");
            newSelectFilteringElement.classList.add(
              "filterPersonnel__Base__BlockQuoteDepartment__Button"
            );
            return newSelectFilteringElement.classList.remove("disabled");
          }

          // If the button is not disabled
          filterPersonnel(a, "Department");
          newSelectFilteringElement.classList.add("disabled");
        });
        // Add them to the departments list filter

        document
          .querySelector("#filterPersonnel__Base__BlockQuoteDepartment")
          .appendChild(newSelectFilteringElement);
      });
      return allDepartments;
    })
    .catch((error) => {});
};

// Search Function Department
document
  .querySelector("#departmentSection__SearchBar__Input")
  .addEventListener("input", (a) => {
    searchDepartment(a.target.value);
  });

const searchDepartment = (value) => {
  // Erase the data on the Personnel Base
  document.getElementById("departmentsBase").textContent = "";
  // Filter the allPersonnels with the value passed
  let newDepartmentArray = allDepartments.filter((department) => {
    return department.name.toLowerCase().includes(value.toLowerCase());
  });
  // Create new classes Location with a forEach on newDepartmentArray Array Filtered
  newDepartmentArray.forEach((department) => {
    let newDepartment = new Department(
      department.id,
      department.name,
      department.color,
      department.dpQuantity
    );
    // Create the HTML
    departmentsBase.appendChild(newDepartment.createHTML());
  });
};

// Send the data to the front-end
export { getAllDepartment, allDepartments };
