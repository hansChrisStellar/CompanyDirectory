<?php
echo 
'
    <nav class="navMobile">
        <button id="navMobile__changeSection" value="p">
            Personnels
        </button>
        <button id="navMobile__changeSection" value="d">
            Departments
        </button>
        <button>
            Add
        </button>
        <button id="navMobile__changeSection" value="l">
            Locations
        </button>
        <button>
            Settings
        </button>
    </nav>
'   
?>


<style>
.navMobile {
    position: fixed;
    bottom: 0;
    background-color: red;
    width: 100%;
    z-index: 5;
}

</style>

<script>
    document.querySelectorAll('#navMobile__changeSection').forEach(p => {
        p.addEventListener('click', (a) => {
            document.getElementById('personnelSection').classList.add('notVisibleSectionPersonnel')
            document.getElementById('departmentSection').classList.add('notVisibleSectionDepartment')
            document.getElementById('locationSection').classList.add('notVisibleSectionLocation')
            document.getElementById('personnelSection').classList.remove('personnelSection')
            document.getElementById('departmentSection').classList.remove('departmentSection')
            document.getElementById('locationSection').classList.remove('locationSection')
            if (a.target.attributes[1].value === 'p') {
                document.getElementById('personnelSection').classList.add('personnelSection')
                document.getElementById('personnelSection').classList.remove('notVisibleSectionPersonnel')
            }
            if (a.target.attributes[1].value === 'd') {
                document.getElementById('departmentSection').classList.add('departmentSection')
                document.getElementById('departmentSection').classList.remove('notVisibleSectionDepartment')
            }
            if (a.target.attributes[1].value === 'l') {
                document.getElementById('locationSection').classList.add('locationSection')
                document.getElementById('locationSection').classList.remove('notVisibleSectionLocation')
            }
        })
    })
</script>