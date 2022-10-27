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
            id="firstNameCreate"
            class="inputFormPersonnel inputForm"
            placeholder="Name *"
          />

          <!-- Last Name -->
          <input
            type="text"
            id="lastNameCreate"
            class="inputFormPersonnel inputForm"
            placeholder="Last Name *"
          />

          <!-- Job Title -->
          <input
            type="text"
            id="jobTitleCreate"
            class="inputFormPersonnel inputForm"
            placeholder="Job Title *"
          />

          <!-- Email -->
          <input
            type="email"
            id="emailCreate"
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
            id="insertPersonnel"
          >
            Create User
          </button>
        </form>
      </article>
</section>';
?>

<script type="module" src="http://localhost/MyWebPortfolio_NoFrameworks/companydirectory/Front-End/Functions/Personnel/insertPersonnel.js">

    
</script>