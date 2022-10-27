const deletePersonnel = async (id) => {
  const data = {
    idUser: id,
  };

  // AJAX the PHP function and send the ID
  const response = await fetch(
    "http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Back-End/Personnel/deletePersonnel.php",
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
      body: JSON.stringify(data),
    }
  )
    .then((response) => response.json())
    .then((data) => {
      console.log("Success:", data);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
};

export { deletePersonnel };
