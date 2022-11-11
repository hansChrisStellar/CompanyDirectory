import { getPersonnelByID } from "./getPersonnelByID.js";

// Variables
let allPersonels = new Array();
const personnelsBase = document.getElementById("personnelsBase");
let toggleDepartment = document.querySelector("#toggleDepartment");
let toggleLocation = document.querySelector("#toggleLocation");

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
    img,
    revenue,
    annualSalary
  ) {
    this.id = id;
    this.firstName = firstName;
    this.lastName = lastName;
    this.jobTitle = jobTitle;
    this.email = email;
    this.department = department;
    this.location = location;
    this.img = img;
    this.revenue = revenue;
    this.annualSalary = annualSalary;
  }

  // Create the HTML of every personnel
  createHTML() {
    const base = document.createElement("div");
    base.classList.add("personelSection__ListOfPersonnels__BasePersonnel");
    base.addEventListener("click", () => {
      // Open the modal for personnel information
      document
        .getElementById("personnelInformation")
        .classList.add("personnelInformation");
      document
        .getElementById("personnelInformation")
        .classList.remove("personnelInformationNotVisible");

      // Image
      document
        .getElementById("personnelInformation__topHeader__Img")
        .setAttribute("src", this.img);

      // First Name
      document.getElementById(
        "personnelInformation__topHeader__NameJobBase__Name"
      ).innerHTML = this.firstName;

      // Second Name
      document.getElementById(
        "personnelInformation__topHeader__NameJobBase__Job"
      ).innerHTML = this.jobTitle;

      // Annual Salary
      document.getElementById("annualSalaryPersonnel").innerHTML =
        this.annualSalary;

      // Revenue
      document.getElementById("revenue").innerHTML = this.revenue;

      // Location
      document.getElementById("locationPersonnel").innerHTML = this.location;

      // Department
      document.getElementById("departmentPersonnel").innerHTML =
        this.department;

      // set the user to a global variable
      getPersonnelByID(this.id, "editPersonnel");
    });

    // Left Side
    const leftSide = document.createElement("div");
    leftSide.classList.add(
      "personelSection__ListOfPersonnels__BasePersonnel__LeftSide"
    );
    base.appendChild(leftSide);

    // Image
    const imagePersonnel = document.createElement("img");
    imagePersonnel.classList.add(
      "personelSection__ListOfPersonnels__BasePersonnel__LeftSide__Image"
    );
    imagePersonnel.setAttribute("src", this.img);
    leftSide.appendChild(imagePersonnel);

    // Right Side
    const rightSide = document.createElement("div");
    rightSide.classList.add(
      "personelSection__ListOfPersonnels__BasePersonnel__RightSide"
    );
    base.appendChild(rightSide);

    // First Name
    const firstNamePersonnel = document.createElement("h2");
    firstNamePersonnel.classList.add(
      "personelSection__ListOfPersonnels__BasePersonnel__RightSide__Name"
    );
    firstNamePersonnel.innerHTML = `${this.firstName} ${this.lastName}`;
    rightSide.appendChild(firstNamePersonnel);

    // Job Title
    const jobTitlePersonnel = document.createElement("h2");
    jobTitlePersonnel.classList.add(
      "personelSection__ListOfPersonnels__BasePersonnel__RightSide__JobTitle"
    );
    jobTitlePersonnel.innerHTML = this.jobTitle;
    rightSide.appendChild(jobTitlePersonnel);

    // Append & Return
    base.append(leftSide, rightSide);
    return base;
  }
}

// Ajax the PHP File
const getAllPersonnel = async () => {
  // Spinner On
  document.getElementById("loadingModal").classList.add("loadingModal");
  document.getElementById("loadingModal").classList.remove("loadingModalOff");
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Personnel/getAll.php"
  )
    .then((response) => response.json())
    .then((data) => {
      allPersonels = [];
      personnelsBase.innerHTML = "";
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
          personnel.img,
          personnel.annualSalary,
          personnel.revenue
        );
        // Create the HTML
        personnelsBase.appendChild(newPersonnel.createHTML());
        // Push object into array
        allPersonels.push(newPersonnel);
      });
      return allPersonels;
    })
    .catch((error) => {});
  // Spinner Off
  document.getElementById("loadingModal").classList.add("loadingModalOff");
  document.getElementById("loadingModal").classList.remove("loadingModal");
};

// Search Function Personnel
document
  .querySelector("#personnelSection__SearchBar__Input")
  .addEventListener("input", (a) => {
    searchPersonnel(a.target.value);
  });

const searchPersonnel = (value) => {
  // Clear all the filters
  document
    .querySelectorAll(".filterPersonnel__Base__BlockQuoteDepartment__Button")
    .forEach((b) => {
      // Remove the disabled classes for all the buttons
      b.classList.remove("disabled");
      // Assign the disabled status to all the buttons
      return (b.disabled = true);
    });

  document
    .querySelectorAll(".filterPersonnel__Base__BlockQuoteLocation__Button")
    .forEach((b) => {
      // Remove the disabled classes for all the buttons
      b.classList.remove("disabled");
      // Assign the disabled status to all the buttons
      return (b.disabled = true);
    });

  // Toggle all the switchs
  toggleDepartment.classList.remove("fa-toggle-on");
  toggleDepartment.classList.add("fa-toggle-off");
  toggleLocation.classList.remove("fa-toggle-on");
  toggleLocation.classList.add("fa-toggle-off");

  // Erase the data on the Personnel Base
  document.getElementById("personnelsBase").textContent = "";
  // Filter the allPersonnels with the value passed
  let newPersonnelsArray = allPersonels.filter((personnel) => {
    return personnel.firstName.toLowerCase().includes(value.toLowerCase());
  });
  // Create new classes Personnnel with a forEach on newPersonnelsArray Array Filtered
  newPersonnelsArray.forEach((personnel) => {
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

// Send the data to the front-end
export { getAllPersonnel, allPersonels, Personnel, personnelsBase };
