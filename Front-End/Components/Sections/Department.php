<?php

echo 
    "<section class='notVisibleSectionDepartment' id='departmentSection'>
        <!-- Top Head Bar -->
        <article class='departmentSection__TopHeadBar'>
            <h2 class='departmentSection__TopHeadBar__Title'>
                Departments
            </h2>
            <button class='departmentSection__TopHeadBar__Button' id='filterDepartment'>
                Filter Department
            </button>
        </article>
    
        <!-- Search Bar -->
        <article class='departmentSection__SearchBar'>
            <input type='text' class='departmentSection__SearchBar__Input' id='departmentSection__SearchBar__Input' />
        </article>

        <!-- List of departments -->
        <article class='departmentSection__ListOfDepartments' id='departmentsBase'>

        </article>
    </section>";
?>

<script>
    // Filter Personnel Button
    document.getElementById('filterDepartment').addEventListener('click', () => {
        document.getElementById('filterDepartmentModal').classList.add('filterDepartment');
        document.getElementById('filterDepartmentModal').classList.remove('filterDepartmentNotVisible');
    })
</script>

<style>

.notVisibleSectionDepartment {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    pointer-events: all;
    opacity: 0;
    transition: 0.2s;
    position: absolute;
    top: 0;
    z-index: 0;
    transform: translateX(-100vw);
    width: 100%;
  }

.departmentSection {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    pointer-events: all;
    opacity: 1;
    transition: 0.2s;
    position: absolute;
    top: 0;
    transform: translateX(0vw);
    z-index: 0;
    width: 100%;
}

.departmentSection__TopHeadBar {
display: flex;
    justify-content: space-between;
    width: 100%;
}

.departmentSection__TopHeadBar__Title {
    padding: 1rem;   
}

.departmentSection__TopHeadBar__Button {
    margin: 1rem;
}

.departmentSection__SearchBar {
    margin-bottom: 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.departmentSection__SearchBar__Input {
    width: 90%;
    padding: .2rem;
}

.departmentSection__ListOfDepartments {
    width: 100%;
    padding-bottom: 1rem;
}

.departmentSection__ListOfDepartments__BaseDepartment {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: red;
    padding: 1rem;
}
</style>