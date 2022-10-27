<?php

# Database connections and variables $conn
include("../Database.php");
$executionStartTime = microtime(true);
$personnel = [];
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

# Query to select a personnel by ID
$query = $conn->prepare('SELECT * from personnel WHERE id = ?');
$query->bind_param("i", $_POST['id']);
$query->execute();

# If there was any error with the query
if (false === $query) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed";	
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output); 
	exit;
}

# If there was not any error with the query we send the personnel requested
$result = $query->get_result();
while ($row = mysqli_fetch_assoc($result)) {
	array_push($personnel, $row);
}
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data']['personnel'] = $personnel;
mysqli_close($conn);
echo json_encode($output);