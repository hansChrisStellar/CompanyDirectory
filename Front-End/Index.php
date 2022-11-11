<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,200;0,8..144,300;0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;0,8..144,800;0,8..144,900;1,8..144,100;1,8..144,200;1,8..144,300;1,8..144,400;1,8..144,500;1,8..144,600;1,8..144,700;1,8..144,800;1,8..144,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3674c8747c.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- Nav Bar Mobile -->
    <?php include './Components/Layouts/MobileNav.php' ?>

    <!-- Spinner -->
    <?php include './Components/Modals/LoadingModal.php' ?>

    <!-- Modal Delete -->
    <?php include './Components/Modals/ModalDelete.php' ?>

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
