<?php

echo 
    "<section class='personnelSection' id='personnelSection'>
        <!-- Top Head Bar -->
        <article class='personnelSection__TopHeadBar'>
            <h2 class='personnelSection__TopHeadBar__Title'>
                Personnels
            </h2>
            <button class='personnelSection__TopHeadBar__Button' id='filterPersonnel'>
                Filter Personnel
            </button>
        </article>
    
        <!-- Search Bar -->
        <article class='personnelSection__SearchBar'>
            <input type='text' class='personnelSection__SearchBar__Input' id='personnelSection__SearchBar__Input' />
        </article>

        <!-- List of Personnels -->
        <article class='personelSection__ListOfPersonnels' id='personnelsBase'>

        </article>
    </section>";
?>

<script>
    // Filter Personnel Button
    document.getElementById('filterPersonnel').addEventListener('click', () => {
        document.getElementById('filterPersonnelModal').classList.add('filterPersonnel');
        document.getElementById('filterPersonnelModal').classList.remove('filterPersonnelNotVisible');
    })
</script>

<style>

.notVisibleSectionPersonnel {
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

.personnelSection {
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

.personnelSection__TopHeadBar {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.personnelSection__TopHeadBar__Title {
    padding: 1rem;    
}

.personnelSection__TopHeadBar__Button {
    margin: 1rem;
}

.personnelSection__SearchBar {
    margin-bottom: 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.personnelSection__SearchBar__Input {
    width: 90%;
    padding: .2rem;
}

.personelSection__ListOfPersonnels {
    width: 100%;
    padding-bottom: 1rem;
}

.personelSection__ListOfPersonnels__BasePersonnel {
   
    display: flex;
    justify-content: flex-start;
    align-items: center;
    background-color: red;
    padding: 1rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__LeftSide {
    width: 3rem;
    height: 3rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__LeftSide__Image {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    object-fit: cover;
}

.personelSection__ListOfPersonnels__BasePersonnel__RightSide {
    margin-left: 1rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__RightSide__Name {
    font-size: 1.2rem;
    margin-bottom: .2rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__RightSide__JobTitle {
    font-size: .9rem;
}    
</style>