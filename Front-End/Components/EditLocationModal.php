<?php

echo 
  '<section class="notVisible" id="modalEditLocation">
    
    <article class="modalEditLocation__Base">

      <nav class="modalEditLocation__BaseNav">

        <button id="modalEditLocation__BaseNavButtonGoBack" class="modalEditLocation__BaseNavButtonGoBack">
          <i class="fa-solid fa-xmark"></i>
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
    z-index: 8;
  }

  .modalEditLocation{
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
    z-index: 8;
  }

  .modalEditLocation__BaseNavButtonGoBack {
    background: none;
    font-size: 1rem;
    border: none;
    color: red;
  }

  .modalEditLocation__Base {
    display: flex;
    flex-direction: column;
    background-color: var(--elementsBaseColor);
    padding: 2rem;
    border-radius: 1rem;
  }

  .modalEditLocation__BaseNav {
    display: flex;
    flex-direction: row;
    margin-bottom: 1rem;
    justify-content: flex-end;
  }

  .modalEditLocation__BaseFormButtonSend {
    background: #216fed;
    padding: 0.5rem;
    border: none;
    border-radius: 0.5rem;
    color: white;
  }

  .modalEditLocation__BaseColor {
    margin-bottom: 1rem;
  }

  .modalEditLocation__BaseNav {
    display: flex;
    flex-direction: row;
  }

  .modalEditLocation__BaseColor {
    margin-bottom: 1rem;
  }

  .modalEditLocation__BaseForm {
    display: flex;
    flex-direction: column;
  }

  .modalEditLocation__BaseFormInput {
    margin-bottom: 1rem;
    padding: .5rem;
  }
</style>

<script type="module" src="http://localhost/CompanyDirectory/Front-End/Functions/Location/updateLocation.js">

    
</script>