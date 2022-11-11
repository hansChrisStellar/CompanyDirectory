<?php

echo 
    "<section class='notVisibleSectionLocation' id='locationSection'>
        <!-- Top Head Bar -->
        <article class='locationSection__TopHeadBar'>
            <h2 class='locationSection__TopHeadBar__Title'>
                Locations
            </h2>
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

.locationSection {
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

.locationSection__TopHeadBar {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
    padding-top: 2rem;
}

.locationSection__TopHeadBar__Title {
    padding: 1rem 2rem;
    font-family: 'Roboto Serif', serif;
    font-weight: 500;
    opacity: .8;
    color: white;
}

.locationSection__TopHeadBar__Button {
    margin: 1rem 2rem;
    padding: 0.5rem 0.6rem;
    border-radius: 1rem;
    border: none;
    color: purple;
    background: var(--elementsBaseColor);
}

.locationSection__SearchBar {
    margin-bottom: 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.locationSection__SearchBar__Input {
    padding: 0.2rem;
    background: white;
    border: 1px solid grey;
}

.locationSection__ListOfLocations {
    width: 100%;
    padding-bottom: 9rem;
    background: var(--elementsBaseColor);
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-top: 1px white solid;
    z-index: 2;
}

.locationSection__ListOfLocations__BaseLocation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
    padding-top: 1.5rem;
}

.locationSection__ListOfLocations__BaseLocation h2 {
    opacity: .8;
    font-size: 1rem;
    font-weight: 500;
    font-family: 'Roboto Serif', serif;
}

.locationSection__ListOfLocations__BaseLocation button {
    font-size: 1rem;
    font-weight: 500;
    background: none;
    border: none;
    opacity: .8;
}
</style>