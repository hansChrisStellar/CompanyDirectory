

<?php

echo 
  '<section class="notVisible" id="modalEditDepartment">
    
    <article class="modalEditDepartment__Base">

      <nav class="modalEditDepartment__BaseNav">

        <h2 class="modalEditDepartment__BaseNavTitle">Edit Department</h2>

        <button id="modalEditDepartment__BaseNavButtonGoBack" class="modalEditDepartment__BaseNavButtonGoBack">
          Go Back
        </button>

      </nav>

      <form class="modalEditDepartment__BaseForm" >

        <!-- Name -->
        <input
          type="text"
          id="nameDepartmentEdit"
          class="modalEditDepartment__BaseFormInput"
          placeholder="Name *"
        />

        <!-- Location -->
        <select
            id="locationIDEdit"
            class="modalEditDepartment__BaseFormInput"
        ></select>

        <!-- Color  -->
        <div class="modalEditDepartment__BaseColor">
            <label for="modalEditDepartment__BaseColorInput">Department Color:</label>
            <input type="color" id="modalEditDepartment__BaseColorInput" />
        </div>

        <!-- Send -->
        <button
          type="submit"
          class="modalEditDepartment__BaseFormButtonSend"
          id="updateDepartmentEdit"
        >
          Update Department
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
    z-index: 1;
  }

  .modalEditDepartment{
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
    z-index: 1;
  }

  .modalEditDepartment__Base {
    display: flex;
    flex-direction: column;
    background-color: blue;
    padding: 1rem;
  }

  .modalEditDepartment__BaseNav {
    display: flex;
    flex-direction: column;
  }

  .modalEditDepartment__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalEditDepartment__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalEditDepartment__BaseFormInput {
    margin-bottom: 1rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Department/updateDepartment.js">

</script>