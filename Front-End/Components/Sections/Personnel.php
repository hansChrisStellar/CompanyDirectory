<?php

echo 
    "<section class='personnelSection' id='personnelSection'>
        <!-- Top Head Bar -->
        <article class='personnelSection__TopHeadBar'>
            <h2 class='personnelSection__TopHeadBar__Title'>
                Personnels
            </h2>
            <button class='personnelSection__TopHeadBar__Button' id='filterPersonnel'>
                <i class='fa-solid fa-magnifying-glass searchIcon'></i>
            </button>
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
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    pointer-events: all;
    opacity: 0;
    transition: 0.2s;
    position: absolute;
    top: 0;
    z-index: 0;
    /* transform: translateX(-100vw); */
    width: 100%;
}

.personnelSection {
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(130deg, rgb(160 114 238) 0%, rgb(81 50 255) 100%);
    align-items: center;
    pointer-events: all;
    opacity: 1;
    transition: 0.2s;
    position: absolute;
    top: 0;
    /* transform: translateX(0vw); */
    z-index: 0;
    width: 100%;
}

.personnelSection__TopHeadBar {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
    padding-top: 2rem;
}

.personnelSection__TopHeadBar__Title {
    padding: 1rem 2rem;
    font-family: 'Roboto Serif', serif;
    font-weight: 500;
    opacity: .8;
    color: white;
}

.personnelSection__TopHeadBar__Button {
    margin: 1rem 2rem;
    padding: 0.5rem 0.6rem;
    border-radius: 1rem;
    border: none;
    color: purple;
    background: var(--elementsBaseColor);
}

.searchIcon {
    opacity: 1;
}

.personelSection__ListOfPersonnels {
    width: 100%;
    padding-bottom: 7rem;
    background: var(--elementsBaseColor);
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-top: 1px white solid;
    z-index: 2;
}

.personelSection__ListOfPersonnels__BasePersonnel {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 0 2rem;
    padding-top: 2rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__LeftSide {
    width: 3.5rem;
    height: 3.5rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__LeftSide__Image {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    object-fit: cover;
    border: 1px solid lightgrey;
}

.personelSection__ListOfPersonnels__BasePersonnel__RightSide {
    margin-left: 1rem;
}

.personelSection__ListOfPersonnels__BasePersonnel__RightSide__Name {
    font-size: 1.2rem;
    margin-bottom: 0.2rem;
    font-weight: 500;
    opacity: .8;
    font-family: 'Roboto Serif', serif;
}

.personelSection__ListOfPersonnels__BasePersonnel__RightSide__JobTitle {
    font-size: .8rem;
    font-weight: 500;
    color: black;
    opacity: 0.5;
    font-family: 'Roboto Serif', serif;
}    
</style>