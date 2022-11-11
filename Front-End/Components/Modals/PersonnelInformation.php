<?php

echo '
<section class="personnelInformationNotVisible" id="personnelInformation">
    <button id="personnelInformation__GoBack">
        <i class="fa-solid fa-chevron-left"></i>
    </button>

    <!-- Top Header -->
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
        <button class="personnelInformation__topHeader__ButtonEdit" id="editPersonnel">
            <i class="fa-solid fa-pencil"></i>
        </button>    
    </article>

    <!-- Middle Side -->
    <section class="personnelInformation__middleSide">

        <article>
            <div>
                <i class="fa-solid fa-sack-dollar" style="color: #F9C784;"></i>
                <h4>Annual Salary</h4>
            </div>
            <h2 id="annualSalaryPersonnel"></h2>
        </article>

        <article>
            <div>
                <i class="fa-solid fa-money-bill-trend-up" style="color: #59C9A5;"></i>
                <h4>Revenue</h4>
            </div>
            <h2 id="revenue"></h2>
        </article>

        <article>
            <div>
                <i class="fa-solid fa-location-arrow" style="color: #2D82B7;"></i>
                <h4>Location</h4>
            </div>
            <h2 id="locationPersonnel"></h2>
        </article>

        <article>
            <div>
                <i class="fa-solid fa-building" style="color: #54DEFD;"></i>
                <h4>Department</h4>
            </div>
            <h2 id="departmentPersonnel"></h2>
        </article>

        
    </section>

    <!-- Bottom Side -->
    <section class="personnelInformation__bottomSide">
        <button class="personnelInformation__bottomSide__ButtonErase" id="eraseModal">
            <i class="fa-solid fa-trash-can"></i>&nbsp; Delete User
        </button>    
    </section>

</section>
'


?>


<style>
.personnelInformationNotVisible {
    position: fixed;
    top: 0;
    background: var(--backgroundBase);
    pointer-events: none;
    opacity: 0;
    width: 100%;
    height: 100vh;
    transition: .2s;
    z-index: 5;
}
.personnelInformation {
    position: fixed;
    top: 0;
    background: var(--backgroundBase);
    pointer-events: all;
    opacity: 1;
    width: 100%;
    height: 100vh;
    transition: .2s;
    z-index: 5;
}

#personnelInformation__GoBack {
    margin-top: 1rem;
    width: 100%;
    text-align: left;
    padding-left: 1.5rem;
    background: none;
    border: none;
    font-size: 1.4rem;
    color: white;
}

.personnelInformation__topHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    border-bottom: 1px grey solid;
}
.personnelInformation__topHeader__Img {
    height: 4rem;
    border: 1px solid;
    width: 4rem;
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
    font-weight: 500;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
    color: white;
}
.personnelInformation__topHeader__NameJobBase__Job {
    font-size: .8rem;
    font-weight: 500;
    color: white;
    font-family: 'Roboto Serif', serif;
    opacity: 0.5;
}
.personnelInformation__topHeader__ButtonEdit {
    padding: 0.5rem 0.6rem;
    border-radius: 1rem;
    border: none;
    color: purple;
    background: var(--elementsBaseColor);
}

.personnelInformation__middleSide {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    gap: .8rem;
    grid-template-areas:
        ". .";
    padding: 1rem; 
    border-bottom: 1px grey solid;
}

.personnelInformation__middleSide article {
    background: var(--elementsBaseColor);
    padding: 1rem;
    border-radius: 1rem;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);
}

.personnelInformation__middleSide article div {
    display: flex;
    justify-content: flex-start;
    padding-bottom: .8rem;
    align-items: center;
}

.personnelInformation__middleSide article div h4 {
    padding-left: .8rem;
    opacity: .8;
    font-weight: 400;
    font-size: .9rem;
    font-family: var(--formalFont);
}

.personnelInformation__middleSide article h2 {
    font-family: var(--formalFont);
    font-weight: 500;
}

.personnelInformation__bottomSide {
    margin: 1rem;
}
.personnelInformation__bottomSide__ButtonErase {
    width: 100%;
    padding: 0.5rem;
    background: #ff4769;
    border: none;
    letter-spacing: 1px;
    color: white;
    font-weight: 400;
    border-radius: .5rem;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);
}

</style>

<script type="module">

import { getPersonnelByID, personnelRequestedByID, clearOutPersonnel } from 'http://localhost/CompanyDirectory/Front-End/Functions/Personnel/getPersonnelByID.js'
import { getDepartmentByID, departmentRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Department/getDepartmentByID.js'
import { getLocationByID, locationRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Location/getLocationByID.js'
import { deletePersonnel } from 'http://localhost/CompanyDirectory/Front-End/Functions/Personnel/deletePersonnel.js'

// Open modal Edit Personnel
document.getElementById('editPersonnel').addEventListener('click', () => {
    document.getElementById('modalEditUser').classList.add('modalEditUser')
    document.getElementById('modalEditUser').classList.remove('notVisible')
})

// Open modal Delete for all
document.querySelectorAll('#eraseModal').forEach(p => {
    p.addEventListener('click', () => {
        document.getElementById('modalDelete').classList.add('modalDelete')
        document.getElementById('modalDelete').classList.remove('notVisible')
        // Personnel
        if (personnelRequestedByID.id) document.getElementById('objectDeleting').innerHTML = `${personnelRequestedByID.firstName} ${personnelRequestedByID.lastName}`;
        // Department
        if (departmentRequestedByID.id) document.getElementById('objectDeleting').innerHTML = `${departmentRequestedByID.name}`;
        // Location
        if (locationRequestedByID.id) document.getElementById('objectDeleting').innerHTML = `${locationRequestedByID.name}`;
    })
})

// Close modal Personnel Information
document.getElementById('personnelInformation__GoBack').addEventListener('click', () => {
    clearOutPersonnel()
    document.getElementById('personnelInformation').classList.add('personnelInformationNotVisible')
    document.getElementById('personnelInformation').classList.remove('personnelInformation')
})
</script>