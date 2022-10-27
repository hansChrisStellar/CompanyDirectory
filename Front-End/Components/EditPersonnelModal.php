<?php

echo '<section class="modalEditUserOff" id="modalEditUser">
      <article class="modalUserBase">
        <div class="modalUserBaseUpperSide">
          <h2>Edit Personnel</h2>
          <button id="cancelModalEditPersonnel" class="buttonColor">
            Go Back
          </button>
        </div>
        <form class="modalUserBaseLowerSide formEditUser" >
          <!-- Name -->
          <input
            type="text"
            id="firstName"
            class="inputFormPersonnel inputForm"
            placeholder="Name *"
          />

          <!-- Last Name -->
          <input
            type="text"
            id="lastName"
            class="inputFormPersonnel inputForm"
            placeholder="Last Name *"
          />

          <!-- Job Title -->
          <input
            type="text"
            id="jobTitle"
            class="inputFormPersonnel inputForm"
            placeholder="Job Title *"
          />

          <!-- Email -->
          <input
            type="email"
            id="email"
            class="inputFormPersonnel inputForm"
            placeholder="Email *"
          />

            <!-- Departments -->
            <select
                id="departmentID"
                class=""
            ></select>

          <!-- Send -->
          <button
            type="submit"
            class="inputSend"
            id="updatePersonnel"
          >
            Update User
          </button>
        </form>
      </article>
</section>';
?>

<script type="module" src="http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Front-End/Functions/Personnel/updatePersonnel.js">

    
</script>