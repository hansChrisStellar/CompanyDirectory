<?php

# Database connections and variables $conn
include("../Database.php");
$executionStartTime = microtime(true);
$data = [];
$_POST = json_decode(file_get_contents('php://input'), true);

# If there's an error connecting the Database
if (mysqli_connect_errno()) {
	$output['status']['code'] = "300";
	$output['status']['name'] = "failure";
	$output['status']['description'] = "Database unnavailable";
	$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output);
	exit;
}

# Decrement the location from the column of departments
// $query = $conn->prepare("UPDATE location L SET L.dpQuantity = L.dpQuantity - 1 WHERE L.id = ?");
// $query->bind_param("i", $_POST['pastLocation']);
// $query->execute();

# If there was a problem with the query
// if (false === $query) {
// 	$output['status']['code'] = "400";
// 	$output['status']['name'] = "executed";
// 	$output['status']['description'] = "query failed";
// 	$output['data'] = [];
// 	mysqli_close($conn);
// 	echo json_encode($output);
// 	exit;
// }

# Increment the location from the column of departments
// $query = $conn->prepare("UPDATE location L SET L.dpQuantity = L.dpQuantity + 1 WHERE L.id = ?");
// $query->bind_param("i", $_POST['departmentLocationId']);
// $query->execute();

# If there was a problem with the query
// if (false === $query) {
// 	$output['status']['code'] = "400";
// 	$output['status']['name'] = "executed";
// 	$output['status']['description'] = "query failed";
// 	$output['data'] = [];
// 	mysqli_close($conn);
// 	echo json_encode($output);
// 	exit;
// }

# Prepare the query to update department
$query = $conn->prepare('UPDATE department SET name=?, locationID=?, color=? WHERE id=?');
$query->bind_param("sssi", $_POST['name'], $_POST['locationID'], $_POST['color'], $_POST['id']);
$query->execute();


# If there was a problem with the query
if (false === $query) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed";
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output);
	exit;
}

# If there wasn't a problem with the query, we procced to update the department
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = [];
mysqli_close($conn);
echo json_encode($output);