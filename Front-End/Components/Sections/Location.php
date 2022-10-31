<?php

echo 
    "<section class='notVisibleSectionLocation' id='locationSection'>
        <!-- Top Head Bar -->
        <article class='locationSection__TopHeadBar'>
            <h2 class='locationSection__TopHeadBar__Title'>
                Locations
            </h2>
            <button class='locationSection__TopHeadBar__Button' id='filterLocation'>
                Filter Location
            </button>
        </article>
    
        <!-- Search Bar -->
        <article class='locationSection__SearchBar'>
            <input type='text' class='locationSection__SearchBar__Input' id='locationSection__SearchBar__Input'/>
        </article>

        <!-- List of locations -->
        <article class='locationSection__ListOfLocations' id='locationsBase'>

        </article>
    </section>";
?>

<script>
    // Filter Personnel Button
    document.getElementById('filterLocation').addEventListener('click', () => {
        document.getElementById('filterLocationModal').classList.add('filterLocation');
        document.getElementById('filterLocationModal').classList.remove('filterLocationNotVisible');
    })
</script>

<style>
    

.notVisibleSectionLocation {
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

.locationSection {
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

.locationSection__TopHeadBar {
display: flex;
    justify-content: space-between;
    width: 100%;
}

.locationSection__TopHeadBar__Title {
    padding: 1rem;   
}

.locationSection__TopHeadBar__Button {
    margin: 1rem;
}

.locationSection__SearchBar {
    margin-bottom: 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.locationSection__SearchBar__Input {
    width: 90%;
    padding: .2rem;
}

.locationSection__ListOfLocations {
    width: 100%;
    padding-bottom: 1rem;
}

.locationSection__ListOfLocations__BaseLocation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: red;
    padding: 1rem;
}
</style>