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

# Update the quantity number of pers on deps and deps on locs
$conn->query("UPDATE location SET dpQuantity = 0");

$conn->query("UPDATE location L, (
		SELECT D.locationID, COUNT(D.id) AS total_deps 
		FROM department D
		GROUP BY D.locationID
		) S
SET L.dpQuantity = S.total_deps
WHERE L.id = S.locationID");

# If there wasn't a problem with the query, we procced to update the department
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = [];
mysqli_close($conn);
echo json_encode($output);