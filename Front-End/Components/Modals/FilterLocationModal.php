<?php

echo 

'
<section class="filterLocationNotVisible" id="filterLocationModal">
    <article class="filterLocation__Base">
        <!-- Header -->
        <div class="filterLocation__Base__Header">
            <h2 class="filterLocation__Base__Header__H2">
                Filter Location
            </h2>
            <button class="filterLocation__Base__Header__Button" id="closeFilterLocationModal">
                Close
            </button>
        </div>
        <!-- Active Filters Section -->
        <div class="filterLocation__Base__FiltersSection">
            <h2 class="filterLocation__Base__FiltersSection__H2">
                Active Filters
            </h2>
            <div class="filterLocation__Base__FiltersSection__Filters">

            </div>
        </div>
        <!-- Deparment Selection -->
        <div class="filterLocation__Base__LocationSelection">
            <h2 class="filterLocation__Base__LocationSelection__H2">
                Locations
            </h2>
            <button class="filterLocation__Base__LocationSelection__Button">
                Click
            </button>
        </div>
        <blockquote class="filterLocation__Base__BlockQuoteLocation">
            <button class="filterLocation__Base__BlockQuoteLocation__Button">
                Hola
            </button>
            <button class="filterLocation__Base__BlockQuoteLocation__Button">
                Hola
            </button>
            <button class="filterLocation__Base__BlockQuoteLocation__Button">
                Hola
            </button>
        </blockquote>
        <!-- Location Selection -->
        <div class="filterLocation__Base__LocationSelection">
            <h2 class="filterLocation__Base__LocationSelection__H2">
                Locations
            </h2>
            <button class="filterLocation__Base__LocationSelection__Button">
                Click
            </button>
        </div>
        <blockquote class="filterLocation__Base__BlockQuoteLocation">
            <button class="filterLocation__Base__BlockQuoteLocation__Button">
                Hola
            </button>
            <button class="filterLocation__Base__BlockQuoteLocation__Button">
                Hola
            </button>
            <button class="filterLocation__Base__BlockQuoteLocation__Button">
                Hola
            </button>
        </blockquote>
    </article>
</section>
'

?>

<script>
    document.getElementById('closeFilterLocationModal').addEventListener('click', () => {
        document.getElementById('filterLocationModal').classList.add('filterLocationNotVisible')
        document.getElementById('filterLocationModal').classList.remove('filterLocation')
    })

    // Execute Button Action Filter Locations
    document.querySelectorAll('#test').forEach(p => {
        p.addEventListener('click', () => {
            console.log('hola')
        })
    })
</script>

<style>





.filterLocationNotVisible {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    position: fixed;
    width: 100%;
    height: 100vh;
    transition: .2s;
}

.filterLocation {
    opacity: 1;
    pointer-events: all;
    z-index: 3;
    position: fixed;
    width: 100%;
    transition: .2s;
    background-color:#fff;

  box-shadow: rgba(112,128,175,0.2)0px 16px 24px 0px;

  transform: scale(0);

  transition: transform300ms cubic-bezier(0.57,0.21,0.69,1.25);

}

.filterLocation__Base {
    width: 20rem;
    height: 100vh;
}


</style>