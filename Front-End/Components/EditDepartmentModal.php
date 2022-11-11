<?php

echo 
  '<section class="notVisible" id="modalEditDepartment">
    
    <article class="modalEditDepartment__Base">

      <nav class="modalEditDepartment__BaseNav">

        <button id="modalEditDepartment__BaseNavButtonGoBack" class="modalEditDepartment__BaseNavButtonGoBack">
          <i class="fa-solid fa-xmark"></i>
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
    background: var(--backgroundBase);
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
    z-index: 10;
  }

  .modalEditDepartment{
    background: var(--backgroundBase);
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
    z-index: 10;
  }

  .modalEditDepartment__BaseNavButtonGoBack {
    background: none;
    font-size: 1rem;
    border: none;
    color: red;
  }

  .modalEditDepartment__Base {
    display: flex;
    flex-direction: column;
    background-color: var(--elementsBaseColor);
    padding: 2rem;
    border-radius: 1rem;
  }

  .modalEditDepartment__BaseNav {
    display: flex;
    flex-direction: row;
    margin-bottom: 1rem;
    justify-content: flex-end;
  }

   .modalEditDepartment__BaseFormButtonSend {
    background: #216fed;
    padding: 0.5rem;
    border: none;
    border-radius: 0.5rem;
    color: white;
  }

  .modalEditDepartment__BaseColor {
    margin-bottom: 1rem;
  }

  .modalEditDepartment__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalEditDepartment__BaseFormInput {
    margin-bottom: 1rem;
    padding: .5rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Department/updateDepartment.js">

</script>