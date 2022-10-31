<?php

echo 

'
<section class="filterPersonnelNotVisible" id="filterPersonnelModal">
    <article class="filterPersonnel__Base">
        <!-- Header -->
        <div class="filterPersonnel__Base__Header">
            <h2 class="filterPersonnel__Base__Header__H2">
                Filter Personnel
            </h2>
            <button class="filterPersonnel__Base__Header__Button" id="closeFilterPersonnelModal">
                Close
            </button>
        </div>
        <!-- Active Filters Section -->
        <div class="filterPersonnel__Base__FiltersSection">
            <h2 class="filterPersonnel__Base__FiltersSection__H2">
                Active Filters
            </h2>
            <div class="filterPersonnel__Base__FiltersSection__Filters">

            </div>
        </div>
        <!-- Deparment Header -->
        <div class="filterPersonnel__Base__DepartmentSelection">
            <h2 class="filterPersonnel__Base__DepartmentSelection__H2">
                Departments
            </h2>
            <button class="filterPersonnel__Base__DepartmentSelection__Button">
                Click
            </button>
        </div>
        <!-- Department Selection -->
        <blockquote class="filterPersonnel__Base__BlockQuoteDepartment" id="filterPersonnel__Base__BlockQuoteDepartment">  
        </blockquote>
        <!-- Location Header -->
        <div class="filterPersonnel__Base__LocationSelection">
            <h2 class="filterPersonnel__Base__LocationSelection__H2">
                Locations
            </h2>
            <button class="filterPersonnel__Base__LocationSelection__Button">
                Click
            </button>
        </div>
        <!-- Location Selection -->
        <blockquote class="filterPersonnel__Base__BlockQuoteLocation" id="filterPersonnel__Base__BlockQuoteLocation">
        </blockquote>
    </article>
</section>
'

?>

<script>
    document.getElementById('closeFilterPersonnelModal').addEventListener('click', () => {
        document.getElementById('filterPersonnelModal').classList.add('filterPersonnelNotVisible')
        document.getElementById('filterPersonnelModal').classList.remove('filterPersonnel')
    })
</script>

<style>

.disabled {
    background-color: red;
}

.filterPersonnelNotVisible {
    opacity: 0;
    pointer-events: none;
    position: fixed;
    width: 100%;
    height: 100vh;
    transition: .2s;
    background-color: rgba(0, 0, 0, 0.4);
}

.filterPersonnel {
    opacity: 1;
    pointer-events: all;
    z-index: 3;
    position: fixed;
    width: 100%;
    height: 100vh;
    transition: .2s;
    background-color: rgba(0, 0, 0, 0.4);
}

.filterPersonnel__Base {
    position: absolute;
    right: 0;
    top: 0;
    background: white;
    height: 100vh;
    width: 15rem;
}

.filterPersonnel__Base__Header {
    display: flex;
    justify-content: space-between;
}

.filterPersonnel__Base__DepartmentSelection {
    display: flex;
    justify-content: space-between;
}

.filterPersonnel__Base__BlockQuoteDepartment {
    display: flex;
    flex-direction: column;  
    padding-left: 1rem;  
}

.filterPersonnel__Base__BlockQuoteDepartment__Button {
    width: fit-content;
}

.filterPersonnel__Base__LocationSelection {
    display: flex;
    justify-content: space-between;
}

.filterPersonnel__Base__BlockQuoteLocation {
    display: flex;
    flex-direction: column;  
    padding-left: 1rem;  
}

.filterPersonnel__Base__BlockQuoteLocation__Button {
    width: fit-content;
}

</style>