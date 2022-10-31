<?php

echo '
<section class="personnelInformationNotVisible" id="personnelInformation">
    <!-- Top Header -->
    <button id="personnelInformation__GoBack">
        Go Back
    </button>
    <article class="personnelInformation__topHeader">
        <div class="personnelInformation__topHeader__NameJobBase">
            <img src="" class="personnelInformation__topHeader__Img" id="personnelInformation__topHeader__Img" />
            <div>
                <h4 class="personnelInformation__topHeader__NameJobBase__Name" id="personnelInformation__topHeader__NameJobBase__Name">

                </h4>
                <p class="personnelInformation__topHeader__NameJobBase__Job" id="personnelInformation__topHeader__NameJobBase__Job">

                </p>
            </div>
        </div>
        <button class="class="personnelInformation__topHeader__ButtonEdit" id="editPersonnel">
            Edit user
        </button>
        <button class="class="personnelInformation__topHeader__ButtonErase" id="erasePersonnel">
            Delete user
        </button>
    </article>

    <!-- Middle Side -->
    <article>

    </article>

    <!-- Top Header -->
    <article>
    
    </article>
</section>
'


?>


<style>
.personnelInformationNotVisible {
    position: fixed;
    top: 0;
    background-color: red;
    pointer-events: none;
    opacity: 0;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.personnelInformation {
    position: fixed;
    top: 0;
    background-color: red;
    pointer-events: all;
    opacity: 1;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.personnelInformation__topHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
}
.personnelInformation__topHeader__Img {
    height: 3rem;
    width: 3rem;
    object-fit: cover;
    border-radius: 100%;
}
.personnelInformation__topHeader__NameJobBase {
    display: flex;
    align-items: center;
}

.personnelInformation__topHeader__NameJobBase div {
    margin-left: 1rem;
}

.personnelInformation__topHeader__NameJobBase__Name {
    font-size: 1.2rem;
    margin-bottom: .2rem;
}
.personnelInformation__topHeader__NameJobBase__Job {
    font-size: .9rem;
}
.personnelInformation__topHeader__ButtonEdit {
    
}
</style>

<script type="module">

import { getPersonnelByID, personnelRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Personnel/getPersonnelByID.js'
import { deletePersonnel } from 'http://localhost/CompanyDirectory/Front-End/Functions/Personnel/deletePersonnel.js'

// Close modal Edit Personnel
document.getElementById('editPersonnel').addEventListener('click', () => {
    document.getElementById('modalEditUser').classList.add('modalEditUser')
    document.getElementById('modalEditUser').classList.remove('notVisible')
})

// Fire Delete Personnel
document.getElementById('erasePersonnel').addEventListener('click', () => {
    if (personnelRequestedByID.id) deletePersonnel(personnelRequestedByID.id);
})

// Close modal Personnel Information
document.getElementById('personnelInformation__GoBack').addEventListener('click', () => {
    document.getElementById('personnelInformation').classList.add('personnelInformationNotVisible')
    document.getElementById('personnelInformation').classList.remove('personnelInformation')
})
</script>