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
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        
        <!-- Search Bar -->
        <article class="departmentSection__SearchBar">
            <input type="text" class="departmentSection__SearchBar__Input" id="departmentSection__SearchBar__Input" placeholder="Search" />
        </article>

        <!-- Location Selection -->
        <div class="filterDepartment__Base__LocationSelection">
            <h2 class="filterDepartment__Base__LocationSelection__H2">
                Locations
            </h2>
            <button class="filterDepartment__Base__LocationSelection__Button">
                <i class="fa-solid fa-toggle-off noClickEvent" id="toggleLocation"></i>
            </button>
        </div>
        <blockquote class="filterDepartment__Base__BlockQuoteLocation" id="filterDepartment__Base__BlockQuoteLocation">
            
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

/* .filterDepartmentNotVisible {
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
} */

.disabled {
    width: fit-content;
    margin: 0 0.4rem 1rem;
    padding: 0.4rem;
    border: 1px solid #D81E5B;
    opacity: 1;
    background: none;

}

.filterDepartmentNotVisible {
    opacity: 0;
    pointer-events: none;
    z-index: 3;
    position: fixed;
    width: 100%;
    height: 100vh;
    transition: .2s;
    background-color: rgba(0, 0, 0, 0.4);
}

.filterDepartment {
    opacity: 1;
    pointer-events: all;
    z-index: 3;
    position: fixed;
    width: 100%;
    height: 100vh;
    transition: .2s;
    background-color: rgba(0, 0, 0, 0.4);
}

.filterDepartment__Base {
    position: absolute;
    right: 0;
    top: 0;
    background: var(--elementsBaseColor);
    height: 100vh;
    width: 15rem;
    z-index: 10;
    padding: 1rem;
}

.filterDepartment__Base__Header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.filterDepartment__Base__Header__Button {
    background: none;
    border: none;
    color: red;
    font-size: 1rem;
}

.filterDepartment__Base__Header__H2 {
    font-weight: 400;
    font-size: 1.2rem;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.departmentSection__SearchBar {
    margin-bottom: 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.departmentSection__SearchBar__Input {
    padding: 0.2rem;
    width: 100%;
    background: var(--backgroundBase);
    border: 1px solid grey
}

.filterDepartment__Base__DepartmentSelection {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.filterDepartment__Base__DepartmentSelection__Button {
    background: none;
    border: none;
    font-size: 1.5rem;
}

.filterDepartment__Base__DepartmentSelection__H2 {
    font-weight: 400;
    font-size: 1.2rem;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.filterDepartment__Base__LocationSelection__Button {
    background: none;
    border: none;
    font-size: 1.5rem;
}

.filterDepartment__Base__BlockQuoteDepartment {
    display: flex;
    flex-direction: row;
    padding-left: 0;
    flex-wrap: wrap; 
}

.filterDepartment__Base__BlockQuoteDepartment__Button {
    width: fit-content;
    margin: 0 0.4rem 1rem;
    padding: 0.4rem;
    background: none;
    
    opacity: 1;
}

.filterDepartment__Base__LocationSelection__H2 {
    font-weight: 400;
    font-size: 1.2rem;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.filterDepartment__Base__LocationSelection {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
    align-items: center;
}

.filterDepartment__Base__BlockQuoteLocation {
    display: flex;
    flex-direction: row;
    padding-left: 0;
    flex-wrap: wrap; 
}

.filterDepartment__Base__BlockQuoteLocation__Button {
    width: fit-content;
    margin: 0 0.4rem 1rem;
    padding: 0.4rem;
    background: none;
    opacity: 1;
}


</style>