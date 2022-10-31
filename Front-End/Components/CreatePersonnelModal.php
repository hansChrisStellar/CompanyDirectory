
<?php

echo 
  '<section class="notVisible" id="modalCreateUser">
    
    <article class="modalCreateUser__Base">

      <nav class="modalCreateUser__BaseNav">

        <h2 class="modalCreateUser__BaseNavTitle">Create Personnel</h2>

        <button id="modalCreateUser__BaseNavButtonGoBack" class="modalCreateUser__BaseNavButtonGoBack">
          Go Back
        </button>

      </nav>

      <form class="modalCreateUser__BaseForm" >

        <!-- Name -->
        <input
          type="text"
          id="firstNameCreate"
          class="modalCreateUser__BaseFormInput"
          placeholder="Name *"
        />

        <!-- Last Name -->
        <input
          type="text"
          id="lastNameCreate"
          class="modalCreateUser__BaseFormInput"
          placeholder="Last Name *"
        />

        <!-- Job Title -->
        <input
          type="text"
          id="jobTitleCreate"
          class="modalCreateUser__BaseFormInput"
          placeholder="Job Title *"
        />

        <!-- Email -->
        <input
          type="email"
          id="emailCreate"
          class="modalCreateUser__BaseFormInput"
          placeholder="Email *"
        />

        <!-- Departments -->
        <select
            id="departmentIDCreate"
            class="modalCreateUser__BaseFormInput"
        ></select>

        <!-- Send -->
        <button
          type="submit"
          class="modalCreateUser__BaseFormButtonSend"
          id="createPersonnel"
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
  }

  .modalCreateUser{
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
  }

  .modalCreateUser__Base {
    display: flex;
    flex-direction: column;
    background-color: blue;
    padding: 1rem;
  }

  .modalCreateUser__BaseNav {
    display: flex;
    flex-direction: column;
  }

  .modalCreateUser__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalCreateUser__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalCreateUser__BaseFormInput {
    margin-bottom: 1rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Personnel/insertPersonnel.js">

    
</script>