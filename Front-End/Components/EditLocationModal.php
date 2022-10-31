<?php

echo 
  '<section class="notVisible" id="modalEditLocation">
    
    <article class="modalEditLocation__Base">

      <nav class="modalEditLocation__BaseNav">

        <h2 class="modalEditLocation__BaseNavTitle">Edit Location</h2>

        <button id="modalEditLocation__BaseNavButtonGoBack" class="modalEditLocation__BaseNavButtonGoBack">
          Go Back
        </button>

      </nav>

      <form class="modalEditLocation__BaseForm" >

        <!-- Name -->
        <input
          type="text"
          id="nameLocationEdit"
          class="modalEditLocation__BaseFormInput"
          placeholder="Name *"
        />

        <!-- Color  -->
        <div class="modalEditLocation__BaseColor">
            <label for="modalEditLocation__BaseColorInput">Location Color:</label>
            <input type="color" id="modalEditLocation__BaseColorInput" />
        </div>

        <!-- Send -->
        <button
          type="submit"
          class="modalEditLocation__BaseFormButtonSend"
          id="EditLocation"
        >
          Edit Location
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

  .modalEditLocation{
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

  .modalEditLocation__Base {
    display: flex;
    flex-direction: column;
    background-color: blue;
    padding: 1rem;
  }

  .modalEditLocation__BaseNav {
    display: flex;
    flex-direction: column;
  }

  .modalEditLocation__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalEditLocation__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalEditLocation__BaseFormInput {
    margin-bottom: 1rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Location/updateLocation.js">

    
</script>