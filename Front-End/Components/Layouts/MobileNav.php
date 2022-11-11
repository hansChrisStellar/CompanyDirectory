<?php
echo 
'
    <nav class="navMobile">

        <button id="navMobile__changeSection" value="p" class="navMobile__changeSection">
            <i class="fa-solid fa-image-portrait imgChangeSection iconsNavOn" id="iconPersonnel"></i>
        </button>

        <button id="navMobile__changeSection" value="d" class="navMobile__changeSection">
            <i class="fa-solid fa-users imgChangeSection iconsNavOff" id="iconDepartment"></i>
        </button>
        
        <button id="navMobile__changeSection" value="l" class="navMobile__changeSection">
            <i class="fa-solid fa-location-dot imgChangeSection iconsNavOff" id="iconLocation"></i>
        </button>
        
    </nav>
'   
?>


<style>
.navMobile {
    position: fixed;
    bottom: 0;
    background-color: white;
    width: 100%;
    z-index: 1;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    padding: 2rem 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    
}

.navMobile__changeSection {
    background: none;
    border: none;
    width: 2rem;
}

.imgChangeSection {
    pointer-events: none;
    width: 100%;
    height: 100%;
    font-size: 1.4rem;
}

.iconsNavOn {
    color: var(--buttons);
    transition: .2s;
}

.iconsNavOff {
    color: black;
    opacity: .4;
    transition: .2s;
}

</style>

<script>
    document.querySelectorAll('#navMobile__changeSection').forEach(p => {
        p.addEventListener('click', (a) => {
            // Icons Off
            document.getElementById('iconPersonnel').classList.add('iconsNavOff')
            document.getElementById('iconPersonnel').classList.remove('iconsNavOn')
            document.getElementById('iconDepartment').classList.add('iconsNavOff')
            document.getElementById('iconDepartment').classList.remove('iconsNavOn')
            document.getElementById('iconLocation').classList.add('iconsNavOff')
            document.getElementById('iconLocation').classList.remove('iconsNavOn')
            document.getElementById('personnelSection').classList.add('notVisibleSectionPersonnel')
            document.getElementById('departmentSection').classList.add('notVisibleSectionDepartment')
            document.getElementById('locationSection').classList.add('notVisibleSectionLocation')
            document.getElementById('personnelSection').classList.remove('personnelSection')
            document.getElementById('departmentSection').classList.remove('departmentSection')
            document.getElementById('locationSection').classList.remove('locationSection')
            if (a.target.attributes[1].value === 'p') {
                document.getElementById('personnelSection').classList.add('personnelSection')
                document.getElementById('personnelSection').classList.remove('notVisibleSectionPersonnel')
                // Icon
                document.getElementById('iconPersonnel').classList.add('iconsNavOn')
                document.getElementById('iconPersonnel').classList.remove('iconsNavOff')
            }
            if (a.target.attributes[1].value === 'd') {
                document.getElementById('departmentSection').classList.add('departmentSection')
                document.getElementById('departmentSection').classList.remove('notVisibleSectionDepartment')
                // Icon
                document.getElementById('iconDepartment').classList.add('iconsNavOn')
                document.getElementById('iconDepartment').classList.remove('iconsNavOff')
            }
            if (a.target.attributes[1].value === 'l') {
                document.getElementById('locationSection').classList.add('locationSection')
                document.getElementById('locationSection').classList.remove('notVisibleSectionLocation')
                // Icon
                document.getElementById('iconLocation').classList.add('iconsNavOn')
                document.getElementById('iconLocation').classList.remove('iconsNavOff')
            }
        })
    })
</script>