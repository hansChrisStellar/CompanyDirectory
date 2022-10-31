<?php

echo '
<section class="locationInformationNotVisible" id="locationInformation">
    <!-- Top Header -->
    <button id="locationInformation__GoBack">
        Go Back
    </button>
    <article class="locationInformation__topHeader">
        <div class="locationInformation__topHeader__NameJobBase">
            <h4 class="locationInformation__topHeader__NameJobBase__Name" id="locationInformation__topHeader__NameJobBase__Name">

            </h4>
        </div>
        <div class="locationInformation__topHeader__Buttons">
            <button class="class="locationInformation__topHeader__Buttons__ButtonEdit" id="editLocation">
                Edit Location
            </button>
            <button class="class="locationInformation__topHeader__Buttons__ButtonErase" id="eraseLocation">
                Delete Location
            </button>
        </div>
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
.locationInformationNotVisible {
    position: fixed;
    top: 0;
    background-color: red;
    pointer-events: none;
    opacity: 0;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.locationInformation {
    position: fixed;
    top: 0;
    background-color: red;
    pointer-events: all;
    opacity: 1;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.locationInformation__topHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
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
    font-size: 1.2rem;
    margin-bottom: .2rem;
}
.locationInformation__topHeader__NameJobBase__Job {
    font-size: .9rem;
}
.locationInformation__topHeader__ButtonEdit {
    
}
</style>

<script type="module">

import { getLocationByID, locationRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Location/getLocationByID.js'
import { deleteLocation } from 'http://localhost/CompanyDirectory/Front-End/Functions/Location/deleteLocation.js'

// Open modal Edit location
document.getElementById('editLocation').addEventListener('click', () => {
    document.getElementById('modalEditLocation').classList.add('modalEditLocation')
    document.getElementById('modalEditLocation').classList.remove('notVisible')
})

// Fire Delete location
document.getElementById('eraseLocation').addEventListener('click', () => {
    if (locationRequestedByID.id) deleteLocation(locationRequestedByID.id);
})

// Close modal location Information
document.getElementById('locationInformation__GoBack').addEventListener('click', () => {
    document.getElementById('locationInformation').classList.add('locationInformationNotVisible')
    document.getElementById('locationInformation').classList.remove('locationInformation')
})
</script>