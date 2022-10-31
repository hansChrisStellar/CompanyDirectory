<?php

echo 
  '<section class="notVisible" id="modalCreateLocation">
    
    <article class="modalCreateLocation__Base">

      <nav class="modalCreateLocation__BaseNav">

        <h2 class="modalCreateLocation__BaseNavTitle">Create Location</h2>

        <button id="modalCreateLocation__BaseNavButtonGoBack" class="modalCreateLocation__BaseNavButtonGoBack">
          Go Back
        </button>

      </nav>

      <form class="modalCreateLocation__BaseForm" >

        <!-- Name -->
        <input
          type="text"
          id="nameLocationCreate"
          class="modalCreateLocation__BaseFormInput"
          placeholder="Name *"
        />

        <!-- Color  -->
        <div class="modalCreateLocation__BaseColor">
            <label for="modalCreateLocation__BaseColorInput">Location Color:</label>
            <input type="color" id="modalCreateLocation__BaseColorInput" />
        </div>

        <!-- Send -->
        <button
          type="submit"
          class="modalCreateLocation__BaseFormButtonSend"
          id="createLocation"
        >
          Create Location
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

  .modalCreateLocation{
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

  .modalCreateLocation__Base {
    display: flex;
    flex-direction: column;
    background-color: blue;
    padding: 1rem;
  }

  .modalCreateLocation__BaseNav {
    display: flex;
    flex-direction: column;
  }

  .modalCreateLocation__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalCreateLocation__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalCreateLocation__BaseFormInput {
    margin-bottom: 1rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Location/createLocation.js"></script>