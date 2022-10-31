<?php

echo 

'
<section class="filterDepartmentNotVisible" id="filterDepartmentModal">
    <article class="filterDepartment__Base">
        <!-- Header -->
        <div class="filterDepartment__Base__Header">
            <h2 class="filterDepartment__Base__Header__H2">
                Filter Department
            </h2>
            <button class="filterDepartment__Base__Header__Button" id="closeFilterDepartmentModal">
                Close
            </button>
        </div>
        <!-- Active Filters Section -->
        <div class="filterDepartment__Base__FiltersSection">
            <h2 class="filterDepartment__Base__FiltersSection__H2">
                Active Filters
            </h2>
            <div class="filterDepartment__Base__FiltersSection__Filters">

            </div>
        </div>
        <!-- Deparment Selection -->
        <div class="filterDepartment__Base__DepartmentSelection">
            <h2 class="filterDepartment__Base__DepartmentSelection__H2">
                Departments
            </h2>
            <button class="filterDepartment__Base__DepartmentSelection__Button">
                Click
            </button>
        </div>
        <blockquote class="filterDepartment__Base__BlockQuoteDepartment" id="filterDepartment__Base__BlockQuoteDepartment">
            <button class="filterDepartment__Base__BlockQuoteDepartment__Button">
                Hola
            </button>
            <button class="filterDepartment__Base__BlockQuoteDepartment__Button">
                Hola
            </button>
            <button class="filterDepartment__Base__BlockQuoteDepartment__Button">
                Hola
            </button>
        </blockquote>
        <!-- Location Selection -->
        <div class="filterDepartment__Base__LocationSelection">
            <h2 class="filterDepartment__Base__LocationSelection__H2">
                Locations
            </h2>
            <button class="filterDepartment__Base__LocationSelection__Button">
                Click
            </button>
        </div>
        <blockquote class="filterDepartment__Base__BlockQuoteLocation">
            <button class="filterDepartment__Base__BlockQuoteLocation__Button">
                Hola
            </button>
            <button class="filterDepartment__Base__BlockQuoteLocation__Button">
                Hola
            </button>
            <button class="filterDepartment__Base__BlockQuoteLocation__Button">
                Hola
            </button>
        </blockquote>
    </article>
</section>
'

?>

<script>
    document.getElementById('closeFilterDepartmentModal').addEventListener('click', () => {
        document.getElementById('filterDepartmentModal').classList.add('filterDepartmentNotVisible')
        document.getElementById('filterDepartmentModal').classList.remove('filterDepartment')
    })
</script>

<style>

.filterDepartmentNotVisible {
    opacity: 0;
    pointer-events: none;
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: red;
    transition: .2s;
}

.filterDepartment {
    opacity: 1;
    pointer-events: all;
    z-index: 3;
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: red;
    transition: .2s;
}


</style>