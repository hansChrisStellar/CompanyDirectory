

<?php

echo 
  '<section class="notVisible" id="modalEditUser">
    
    <article class="modalEditUser__Base">

      <nav class="modalEditUser__BaseNav">

        <h2 class="modalEditUser__BaseNavTitle">Edit Personnel</h2>

        <button id="modalEditUser__BaseNavButtonGoBack" class="modalEditUser__BaseNavButtonGoBack">
          Go Back
        </button>

      </nav>

      <form class="modalEditUser__BaseForm" >

        <!-- Name -->
        <input
          type="text"
          id="firstNameEdit"
          class="modalEditUser__BaseFormInput"
          placeholder="Name *"
        />

        <!-- Last Name -->
        <input
          type="text"
          id="lastNameEdit"
          class="modalEditUser__BaseFormInput"
          placeholder="Last Name *"
        />

        <!-- Job Title -->
        <input
          type="text"
          id="jobTitleEdit"
          class="modalEditUser__BaseFormInput"
          placeholder="Job Title *"
        />

        <!-- Email -->
        <input
          type="email"
          id="emailEdit"
          class="modalEditUser__BaseFormInput"
          placeholder="Email *"
        />

        <!-- Departments -->
        <select
            id="departmentIDEdit"
            class="modalEditUser__BaseFormInput"
        ></select>

        <!-- Send -->
        <button
          type="submit"
          class="modalEditUser__BaseFormButtonSend"
          id="updatePersonnelEdit"
        >
          Update User
        </button>

      </form>

    </article>

  </section>';
?>

<style>

  .notVisible {
    background-color: red;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none;
    opacity: 0;
    transition: 0.2s;
    z-index: 2;
  }

  .modalEditUser{
    background-color: red;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: all;
    opacity: 1;
    transition: 0.2s;
    z-index: 2;
  }

  .modalEditUser__Base {
    display: flex;
    flex-direction: column;
    background-color: blue;
    padding: 1rem;
  }

  .modalEditUser__BaseNav {
    display: flex;
    flex-direction: column;
  }

  .modalEditUser__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalEditUser__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalEditUser__BaseFormInput {
    margin-bottom: 1rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Personnel/updatePersonnel.js">

</script>