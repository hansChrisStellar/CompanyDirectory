import { deletePersonnel } from "./deletePersonnel.js";
import { getPersonnelByID } from "./getPersonnelByID.js";

// Variables
const allPersonels = new Array();
const personnelsBase = document.getElementById("personnelsBase");

// Personnel Class
class Personnel {
  // Personnel innitial information
  constructor(
    id,
    firstName,
    lastName,
    jobTitle,
    email,
    department,
    location,
    img
  ) {
    this.id = id;
    this.firstName = firstName;
    this.lastName = lastName;
    this.jobTitle = jobTitle;
    this.email = email;
    this.department = department;
    this.location = location;
    this.img = img;
  }

  // Create the HTML of every personnel
  createHTML() {
    const base = document.createElement("div");
    // First Name
    const firstNamePersonnel = document.createElement("h2");
    firstNamePersonnel.innerHTML = this.firstName;
    // Last Name
    const lastNamePersonnel = document.createElement("h2");
    lastNamePersonnel.innerHTML = this.lastName;
    // Job Title
    const jobTitlePersonnel = document.createElement("h2");
    jobTitlePersonnel.innerHTML = this.jobTitle;
    // Email
    const emailPersonnel = document.createElement("h2");
    emailPersonnel.innerHTML = this.email;
    // Department
    const departmentPersonnel = document.createElement("h2");
    departmentPersonnel.innerHTML = this.department;
    // Location
    const locationPersonnel = document.createElement("h2");
    locationPersonnel.innerHTML = this.location;
    // Delete Button
    const deleteButton = document.createElement("button");
    deleteButton.innerHTML = "Delete";
    deleteButton.addEventListener("click", () => {
      deletePersonnel(this.id);
    });
    // Edit Button
    const editButton = document.createElement("button");
    editButton.innerHTML = "Edit";
    editButton.addEventListener("click", () => {
      getPersonnelByID(this.id);
    });

    // Append & Return
    base.append(
      firstNamePersonnel,
      lastNamePersonnel,
      jobTitlePersonnel,
      emailPersonnel,
      departmentPersonnel,
      locationPersonnel,
      deleteButton,
      editButton
    );
    return base;
  }
}

// Ajax the PHP File
const getAllPersonnel = async () => {
  const response = await fetch(
    "http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Back-End/Personnel/getAll.php"
  )
    .then((response) => response.json())
    .then((data) => {
      // For each array given
      const eachPersonnel = data.data.forEach((personnel) => {
        // Create new object
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
        // Push object into array
        allPersonels.push(newPersonnel);
      });
      return allPersonels;
    })
    .catch((error) => {});
};

// Send the data to the front-end
export { getAllPersonnel, allPersonels };
