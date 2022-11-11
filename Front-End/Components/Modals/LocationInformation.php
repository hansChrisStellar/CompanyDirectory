<?php

echo '
<section class="locationInformationNotVisible" id="locationInformation">
    <button id="locationInformation__GoBack">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <!-- Top Header -->
    <article class="locationInformation__topHeader">
        <div class="locationInformation__topHeader__NameJobBase">
            <h4 class="locationInformation__topHeader__NameJobBase__Name" id="locationInformation__topHeader__NameJobBase__Name">

            </h4>
        </div>
        <button class="locationInformation__topHeader__ButtonEdit" id="editLocation">
            <i class="fa-solid fa-pencil"></i>
        </button>    
    </article>

    <!-- Middle Side -->
    <section class="locationInformation__middleSide">
        <article>
            <div>
                <i class="fa-solid fa-users-viewfinder" style="color: #F9C784;"></i>
                <h4>Personnels</h4>
            </div>
            <h2 id="locationsPersonnel"></h2>
        </article>

        <article>
            <div>
                <i class="fa-solid fa-building" style="color: #2D82B7;"></i>
                <h4>Departments</h4>
            </div>
            <h2 id="locationsDepartment"></h2>
        </article>
    </section>

    <!-- Top Header -->
    <section class="locationInformation__bottomSide">
        <button class="locationInformation__bottomSide__ButtonErase" id="eraseModal">
            <i class="fa-solid fa-trash-can"></i>&nbsp; Delete Location
        </button>    
    </section>
</section>
'


?>


<style>
.locationInformationNotVisible {
    position: fixed;
    top: 0;
    background: var(--backgroundBase);
    pointer-events: none;
    opacity: 0;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.locationInformation {
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

#locationInformation__GoBack {
    margin-top: 1rem;
    width: 100%;
    text-align: left;
    padding-left: 1.5rem;
    background: none;
    border: none;
    font-size: 1.4rem;
    color: white;
}

.locationInformation__topHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
}
.locationInformation__topHeader__Img {
    height: 3rem;
    width: 3rem;
    object-fit: cover;
    border-radius: 100%;
}
.locationInformation__topHeader__NameJobBase {
    display: flex;
    align-items: center;
}

.locationInformation__topHeader__NameJobBase div {
    margin-left: 1rem;
}

.locationInformation__topHeader__NameJobBase__Name {
    font-size: 1.5rem;
    font-weight: 300;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
    color: white;
}
.locationInformation__topHeader__NameJobBase__Job {
    font-size: .9rem;
}
.locationInformation__topHeader__ButtonEdit {
    padding: 0.5rem 0.6rem;
    border-radius: 1rem;
    border: none;
    color: purple;
    background: var(--elementsBaseColor);
}

.locationInformation__middleSide {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    gap: .8rem;
    grid-template-areas:
        ". .";
    padding: 1rem; 
    border-bottom: 1px grey solid;
}

.locationInformation__middleSide article {
    background: var(--elementsBaseColor);
    padding: 1rem;
    border-radius: 1rem;
}

.locationInformation__middleSide article div {
    display: flex;
    justify-content: flex-start;
    padding-bottom: .8rem;
}

.locationInformation__middleSide article div h4 {
    padding-left: .8rem;
    opacity: .8;
    font-weight: 400;
    font-size: .9rem;
    font-family: var(--formalFont);
}

.locationInformation__middleSide article h2 {
    font-family: var(--formalFont);
    font-weight: 500;
}

.locationInformation__bottomSide {
    margin: 1rem;
}
.locationInformation__bottomSide__ButtonErase {
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

import { getLocationByID, locationRequestedByID, clearOutLocation } from 'http://localhost/CompanyDirectory/Front-End/Functions/Location/getLocationByID.js'

// Open modal Edit location
document.getElementById('editLocation').addEventListener('click', () => {
    document.getElementById('modalEditLocation').classList.add('modalEditLocation')
    document.getElementById('modalEditLocation').classList.remove('notVisible')
})

// Close modal Location Information
document.getElementById('locationInformation__GoBack').addEventListener('click', () => {
    clearOutLocation();
    document.getElementById('locationInformation').classList.add('locationInformationNotVisible')
    document.getElementById('locationInformation').classList.remove('locationInformation')
})
</script>