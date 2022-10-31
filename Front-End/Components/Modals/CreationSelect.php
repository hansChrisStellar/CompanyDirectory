<?php

echo '

    <section class="notVisible">
        <!-- Create Personnel -->
        <button id="openModalCreatePersonnel" class="creationSelect__Button">
            Create Personnel
        </button>

        <!-- Create Department -->
        <button id="openModalCreateDepartment" class="creationSelect__Button">
            Create Department
        </button>

        <!-- Create Location -->
        <button id="openModalCreateLocation" class="creationSelect__Button">
            Create Location
        </button>
    </section>
'

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

.creationSelect {
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

.creationSelect__Button {

}
</style>