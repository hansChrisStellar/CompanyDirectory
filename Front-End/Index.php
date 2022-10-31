<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <title>Document</title>
</head>
<body>
    <!-- Nav Bar Mobile -->
    <?php include './Components/Layouts/MobileNav.php' ?>

    <!-- Modal Selection -->
    <?php include './Components/Modals/CreationSelect.php' ?>

    <!-- Modal Create Personnel -->
    <?php include './Components/CreatePersonnelModal.php' ?>

    <!-- Modal Edit Personnel -->
    <?php include './Components/EditPersonnelModal.php' ?>

    <!-- Modal Create Department -->
    <?php include './Components/CreateDepartmentModal.php' ?>

    <!-- Modal Edit Department -->
    <?php include './Components/EditDepartmentModal.php' ?>

    <!-- Modal Create Location -->
    <?php include './Components/CreateLocationModal.php' ?>

    <!-- Modal Edit Location -->
    <?php include './Components/EditLocationModal.php' ?>

    <!-- Modal Filter Personnel -->
    <?php include './Components/Modals/FilterPersonnelModal.php' ?>

    <!-- Modal Filter Department -->
    <?php include './Components/Modals/FilterDepartmentModal.php' ?>

    <!-- Modal Filter Location -->
    <?php include './Components/Modals/FilterLocationModal.php' ?>

    <!-- Personnels -->
    <?php include './Components/Sections/Personnel.php' ?>

    <!-- Departments -->
    <?php include './Components/Sections/Department.php' ?>

    <!-- Locations -->
    <?php include './Components/Sections/Location.php' ?>

    <!-- Modal Personnel Information -->
    <?php include './Components/Modals/PersonnelInformation.php' ?>

    <!-- Modal Department Information -->
    <?php include './Components/Modals/DepartmentInformation.php' ?>

    <!-- Modal Location Information -->
    <?php include './Components/Modals/LocationInformation.php' ?>


    <script type="module" src="Index.js">
        
    </script>
</body>
</html>
