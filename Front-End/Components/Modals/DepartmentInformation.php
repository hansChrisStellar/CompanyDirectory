<?php

echo '
<section class="departmentInformationNotVisible" id="departmentInformation">
    <button id="departmentInformation__GoBack">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <!-- Top Header -->
    <article class="departmentInformation__topHeader">
        <div class="departmentInformation__topHeader__NameJobBase">
            <h4 class="departmentInformation__topHeader__NameJobBase__Name" id="departmentInformation__topHeader__NameJobBase__Name">

            </h4>
        </div>
        <button class="departmentInformation__topHeader__ButtonEdit" id="editDepartment">
            <i class="fa-solid fa-pencil"></i>
        </button>    
    </article>

    <!-- Middle Side -->
    <section class="departmentInformation__middleSide">

        <article>
            <div>
                <i class="fa-solid fa-users-viewfinder" style="color: #F9C784;"></i>
                <h4>Personnels</h4>
            </div>
            <h2 id="departmentPersonnels"></h2>
        </article>

        <article>
            <div>
                <i class="fa-solid fa-location-arrow" style="color: #2D82B7;"></i>
                <h4>Location</h4>
            </div>
            <h2 id="departmentLocation"></h2>
        </article>

        
    </section>

    <!-- Top Header -->
    <section class="departmentInformation__bottomSide">
        <button class="departmentInformation__bottomSide__ButtonErase" id="eraseModal">
            <i class="fa-solid fa-trash-can"></i>&nbsp; Delete Department
        </button>    
    </section>
</section>
'


?>


<style>
.departmentInformationNotVisible {
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
.departmentInformation {
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

#departmentInformation__GoBack {
    margin-top: 1rem;
    width: 100%;
    text-align: left;
    padding-left: 1.5rem;
    background: none;
    border: none;
    font-size: 1.4rem;
    color: white;
}

.departmentInformation__topHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
}
.departmentInformation__topHeader__Img {
    height: 3rem;
    width: 3rem;
    object-fit: cover;
    border-radius: 100%;
}
.departmentInformation__topHeader__NameJobBase {
    display: flex;
    align-items: center;
}

.departmentInformation__topHeader__NameJobBase div {
    margin-left: 1rem;
}

.departmentInformation__topHeader__NameJobBase__Name {
    font-size: 1.5rem;
    font-weight: 300;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
    color: white;
}
.departmentInformation__topHeader__NameJobBase__Job {
    font-size: .9rem;
}
.departmentInformation__topHeader__ButtonEdit {
    padding: 0.5rem 0.6rem;
    border-radius: 1rem;
    border: none;
    color: purple;
    background: var(--elementsBaseColor);
}

.departmentInformation__middleSide {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    gap: .8rem;
    grid-template-areas:
        ". .";
    padding: 1rem; 
    border-bottom: 1px grey solid;
}

.departmentInformation__middleSide article {
    background: var(--elementsBaseColor);
    padding: 1rem;
    border-radius: 1rem;
}

.departmentInformation__middleSide article div {
    display: flex;
    justify-content: flex-start;
    padding-bottom: .8rem;
}

.departmentInformation__middleSide article div h4 {
    padding-left: .8rem;
    opacity: .8;
    font-weight: 400;
    font-size: .9rem;
    font-family: var(--formalFont);
}

.departmentInformation__middleSide article h2 {
    font-family: var(--formalFont);
    font-weight: 500;
}

.departmentInformation__bottomSide {
    margin: 1rem;
}
.departmentInformation__bottomSide__ButtonErase {
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

import { getDepartmentByID, departmentRequestedByID, clearOutDepartment } from 'http://localhost/CompanyDirectory/Front-End/Functions/Department/getDepartmentByID.js'


// Open modal Edit department
document.getElementById('editDepartment').addEventListener('click', () => {
    document.getElementById('modalEditDepartment').classList.add('modalEditDepartment')
    document.getElementById('modalEditDepartment').classList.remove('notVisible')
})

// Close modal Department Information
document.getElementById('departmentInformation__GoBack').addEventListener('click', () => {
    clearOutDepartment();
    document.getElementById('departmentInformation').classList.add('departmentInformationNotVisible')
    document.getElementById('departmentInformation').classList.remove('departmentInformation')
})
</script>