

<?php

echo 
  '<section class="notVisible" id="modalCreateDepartment">
    
    <article class="modalCreateDepartment__Base">

      <nav class="modalCreateDepartment__BaseNav">

        <h2 class="modalCreateDepartment__BaseNavTitle">Create Department</h2>

        <button id="modalCreateDepartment__BaseNavButtonGoBack" class="modalCreateDepartment__BaseNavButtonGoBack">
          Go Back
        </button>

      </nav>

      <form class="modalCreateDepartment__BaseForm" >

        <!-- Name -->
        <input
          type="text"
          id="nameDepartmentCreate"
          class="modalCreateDepartment__BaseFormInput"
          placeholder="Name *"
        />

        <!-- Location -->
        <select
            id="locationIDCreate"
            class="modalCreateDepartment__BaseFormInput"
        ></select>

        <!-- Color  -->
        <div class="modalCreateDepartment__BaseColor">
            <label for="modalCreateDepartment__BaseColorInput">Department Color:</label>
            <input type="color" id="modalCreateDepartment__BaseColorInput" />
        </div>

        <!-- Send -->
        <button
          type="submit"
          class="modalCreateDepartment__BaseFormButtonSend"
          id="createDepartment"
        >
          Create Department
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

  .modalCreateDepartment{
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

  .modalCreateDepartment__Base {
    display: flex;
    flex-direction: column;
    background-color: blue;
    padding: 1rem;
  }

  .modalCreateDepartment__BaseNav {
    display: flex;
    flex-direction: column;
  }

  .modalCreateDepartment__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalCreateDepartment__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalCreateDepartment__BaseFormInput {
    margin-bottom: 1rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Department/createDepartment.js">

</script>