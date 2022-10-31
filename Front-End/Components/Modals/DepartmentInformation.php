<?php

echo '
<section class="departmentInformationNotVisible" id="departmentInformation">
    <!-- Top Header -->
    <button id="departmentInformation__GoBack">
        Go Back
    </button>
    <article class="departmentInformation__topHeader">
        <div class="departmentInformation__topHeader__NameJobBase">
            <h4 class="departmentInformation__topHeader__NameJobBase__Name" id="departmentInformation__topHeader__NameJobBase__Name">

            </h4>
        </div>
        <div class="departmentInformation__topHeader__Buttons">
            <button class="class="departmentInformation__topHeader__Buttons__ButtonEdit" id="editDepartment">
                Edit Department
            </button>
            <button class="class="departmentInformation__topHeader__Buttons__ButtonErase" id="eraseDepartment">
                Delete Department
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
.departmentInformationNotVisible {
    position: fixed;
    top: 0;
    background-color: red;
    pointer-events: none;
    opacity: 0;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.departmentInformation {
    position: fixed;
    top: 0;
    background-color: red;
    pointer-events: all;
    opacity: 1;
    width: 100%;
    height: 100vh;
    transition: .2s;
}
.departmentInformation__topHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
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
    font-size: 1.2rem;
    margin-bottom: .2rem;
}
.departmentInformation__topHeader__NameJobBase__Job {
    font-size: .9rem;
}
.departmentInformation__topHeader__ButtonEdit {
    
}
</style>

<script type="module">

import { getDepartmentByID, departmentRequestedByID } from 'http://localhost/CompanyDirectory/Front-End/Functions/Department/getDepartmentByID.js'
import { deleteDepartment } from 'http://localhost/CompanyDirectory/Front-End/Functions/Department/deleteDepartment.js'

// Close modal Edit department
document.getElementById('editDepartment').addEventListener('click', () => {
    document.getElementById('modalEditDepartment').classList.add('modalEditDepartment')
    document.getElementById('modalEditDepartment').classList.remove('notVisible')
})

// Fire Delete department
document.getElementById('eraseDepartment').addEventListener('click', () => {
    if (departmentRequestedByID.id) deletedepartment(departmentRequestedByID.id);
})

// Close modal department Information
document.getElementById('departmentInformation__GoBack').addEventListener('click', () => {
    document.getElementById('departmentInformation').classList.add('departmentInformationNotVisible')
    document.getElementById('departmentInformation').classList.remove('departmentInformation')
})
</script>