// Variables
let personnelRequestedByID;

// Ajax the PHP File
const getPersonnelByID = async (id) => {
  const data = {
    id: id,
  };

  const response = await fetch(
    "http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Back-End/Personnel/getPersonnelByID.php",
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
      personnelRequestedByID = data.data.personnel[0];
      console.log(personnelRequestedByID);
    })
    .catch((error) => {});
};

// Send the data to the front-end
export { getPersonnelByID, personnelRequestedByID };
