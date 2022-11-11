

<?php

echo 
  '<section class="notVisible" id="modalDelete">
    <button class="modalDelete__BackButton" id="goBackModalDelete">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <article class="modalDelete__Base">
        <h2>
            Do you really want to delete <span id="objectDeleting"></span>
        </h2>

        <div>
            <button id="goBackModalDelete" class="noButtonDeleteModal">No</button>
            <button id="deleteAction" class="yesButtonDeleteModal"><i class="fa-solid fa-trash-can"></i> Yes</button>
        </div>
    </article>

  </section>';
?>

<style>

#objectDeleting {
    font-weight: 600;
    font-family: var(--formalFont);
}

.modalDelete {
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

.modalDelete__Base {
    display: flex;
    flex-direction: column;
    background: var(--elementsBaseColor);
    padding: 1rem;
    max-width: 15rem;
    border-radius: 4px;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);
}

.modalDelete__Base h2 {
    font-size: 1.2rem;
    margin-bottom: 1rem;
    font-weight: 400;
}

.modalDelete__Base div {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.modalDelete__Base button {
    margin-left: 1rem;
    font-family: var(--formalFont);
    padding: 0.5rem;
color: white;
    border: none;
    border-radius: 2px;
    font-weight: 400;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    text-transform: uppercase;
    letter-spacing: 2.5px;
    width: fit-content;
    height: fit-content;
}

.modalDelete__BackButton{
    position: absolute;
    top: 2rem;
    left: 2rem;
    background: none;
    border: none;
    font-size: 2rem;
    color: white;
}

.noButtonDeleteModal {
    background: #64a4ff;
}

.yesButtonDeleteModal {
    background: #ff4769;
}

</style>

<script type="module">
    import { deletePersonnel } from 'http://localhost/CompanyDirectory/Front-End/Functions/Personnel/deletePersonnel.js'
    import { deleteDepartment } from 'http://localhost/CompanyDirectory/Front-End/Functions/Department/deleteDepartment.js'
    import { deleteLocation } from 'http://localhost/CompanyDirectory/Front-End/Functions/Location/deleteLocation.js'
    import { personnelRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Personnel/getPersonnelByID.js'
    import { departmentRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Department/getDepartmentByID.js'
    import { locationRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Location/getLocationByID.js'

    // Fire delete action
    document.getElementById('deleteAction').addEventListener('click', () => {
       if (personnelRequestedByID.id) deletePersonnel(personnelRequestedByID.id);
       if (departmentRequestedByID.id) deleteDepartment(departmentRequestedByID.id)
       if (locationRequestedByID.id) deleteLocation(locationRequestedByID.id)
    })

    // Close all the modals and go back to home
    document.querySelectorAll('#goBackModalDelete').forEach(p => {
        p.addEventListener('click', () => {
            document.getElementById('modalDelete').classList.add('notVisible')
            document.getElementById('modalDelete').classList.remove('modalDelete')
        })
    })
</script>