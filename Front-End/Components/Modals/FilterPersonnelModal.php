<?php

echo 

'
<section class="filterPersonnelNotVisible" id="filterPersonnelModal">
    <article class="filterPersonnel__Base">
        <!-- Header -->
        <div class="filterPersonnel__Base__Header">
            <h2 class="filterPersonnel__Base__Header__H2">
                Settings
            </h2>
            <button class="filterPersonnel__Base__Header__Button" id="closeFilterPersonnelModal">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
         <!-- Search Bar -->
        <article class="personnelSection__SearchBar">
            <input type="text" class="personnelSection__SearchBar__Input" id="personnelSection__SearchBar__Input" placeholder="Search" />
        </article>
        <!-- Deparment Header -->
        <div class="filterPersonnel__Base__DepartmentSelection">
            <h2 class="filterPersonnel__Base__DepartmentSelection__H2">
                Filter by Departments
            </h2>
            <button class="filterPersonnel__Base__DepartmentSelection__Button">
                <i class="fa-solid fa-toggle-off noClickEvent" id="toggleDepartment"></i>
            </button>
        </div>
        <!-- Department Selection -->
        <blockquote class="filterPersonnel__Base__BlockQuoteDepartment" id="filterPersonnel__Base__BlockQuoteDepartment">  
        </blockquote>
        <!-- Location Header -->
        <div class="filterPersonnel__Base__LocationSelection">
            <h2 class="filterPersonnel__Base__LocationSelection__H2">
                Filter by Locations
            </h2>
            <button class="filterPersonnel__Base__LocationSelection__Button" >
                <i class="fa-solid fa-toggle-off noClickEvent" id="toggleLocation"></i>
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

.fa-toggle-on {
    color: #59C9A5;
}

.fa-toggle-off {
    color: #D81E5B;
}

.disabled {
    width: fit-content;
    margin: 0 0.4rem 1rem;
    padding: 0.4rem;
    border: 1px solid #D81E5B;
    opacity: 1;
    background: none;

}

.filterPersonnelNotVisible {
    opacity: 0;
    pointer-events: none;
    z-index: 3;
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
    background: var(--elementsBaseColor);
    height: 100vh;
    width: 15rem;
    z-index: 10;
    padding: 1rem;
    border-left: 1px solid purple;
}

.filterPersonnel__Base__Header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.filterPersonnel__Base__Header__Button {
    background: none;
    border: none;
    color: #D81E5B;
    font-size: 1rem;
}

.filterPersonnel__Base__Header__H2 {
    font-weight: 400;
    font-size: 1.2rem;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.personnelSection__SearchBar {
    margin-bottom: 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.personnelSection__SearchBar__Input {
    padding: 0.2rem;
    width: 100%;
    border: 1px solid grey
}

.filterPersonnel__Base__DepartmentSelection {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
    align-items: center;
}

.filterPersonnel__Base__DepartmentSelection__Button {
    background: none;
    border: none;
    font-size: 1.5rem;
}

.filterPersonnel__Base__DepartmentSelection__H2 {
    font-weight: 400;
    font-size: .9rem;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.filterPersonnel__Base__LocationSelection__Button {
    background: none;
    border: none;
    font-size: 1.5rem;
}

.filterPersonnel__Base__BlockQuoteDepartment {
    display: flex;
    flex-direction: row;
    padding-left: 0;
    flex-wrap: wrap; 
}

.filterPersonnel__Base__BlockQuoteDepartment__Button {
    width: fit-content;
    margin: 0 0.4rem 1rem;
    padding: 0.4rem;
    background: none;
    
    opacity: 1;
}

.filterPersonnel__Base__LocationSelection__H2 {
    font-weight: 400;
    font-size: .9rem;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.filterPersonnel__Base__LocationSelection {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
    align-items: center;
}

.filterPersonnel__Base__BlockQuoteLocation {
    display: flex;
    flex-direction: row;
    padding-left: 0;
    flex-wrap: wrap; 
}

.filterPersonnel__Base__BlockQuoteLocation__Button {
    width: fit-content;
    margin: 0 0.4rem 1rem;
    padding: 0.4rem;
    background: none;
    opacity: 1;
}

</style>