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
    base.classList.add("personelSection__ListOfPersonnels__BasePersonnel");
    base.addEventListener("click", () => {
      // Open the modal for personnel information
      document
        .getElementById("personnelInformation")
        .classList.add("personnelInformation");
      document
        .getElementById("personnelInformation")
        .classList.remove("personnelInformationNotVisible");

      document
        .getElementById("personnelInformation__topHeader__Img")
        .setAttribute("src", this.img);

      document.getElementById(
        "personnelInformation__topHeader__NameJobBase__Name"
      ).innerHTML = this.firstName;

      document.getElementById(
        "personnelInformation__topHeader__NameJobBase__Job"
      ).innerHTML = this.jobTitle;

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
    firstNamePersonnel.innerHTML = this.firstName;
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
  const response = await fetch(
    "http://localhost/CompanyDirectory/Back-End/Personnel/getAll.php"
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

// Search Function Personnel
document
  .querySelector("#personnelSection__SearchBar__Input")
  .addEventListener("input", (a) => {
    searchPersonnel(a.target.value);
  });

const searchPersonnel = (value) => {
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
