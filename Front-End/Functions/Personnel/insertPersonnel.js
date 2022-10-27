// Variables

let newPersonnelData = {
  firstName: "",
  lastName: "",
  jobTitle: "",
  email: "",
  img: "",
  departmentID: 0,
};

// Input Texts
document
  .querySelectorAll(
    "#firstNameCreate, #lastNameCreate, #jobTitleCreate, #emailCreate"
  )
  .forEach((e) => {
    e.addEventListener("input", (a) => {
      if (a.target.id === "firstNameCreate")
        newPersonnelData.firstName = a.target.value;
      if (a.target.id === "lastNameCreate")
        newPersonnelData.lastName = a.target.value;
      if (a.target.id === "jobTitleCreate")
        newPersonnelData.jobTitle = a.target.value;
      if (a.target.id === "emailCreate")
        newPersonnelData.email = a.target.value;
    });
  });

document.getElementById("insertPersonnel").addEventListener("click", (e) => {
  e.preventDefault();
  insertPersonnel(newPersonnelData);
});

const insertPersonnel = async (newPersonnelData) => {
  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Back-End/Personnel/insertPersonnel.php",
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
      body: JSON.stringify(newPersonnelData),
    }
  )
    .then((response) => response.json())
    .then((data) => {
      console.log("Success:", data);
    });
};

export { insertPersonnel };
