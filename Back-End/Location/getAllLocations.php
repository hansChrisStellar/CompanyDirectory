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

# Read all the locations 
$query = 'SELECT name, id, dpQuantity, color FROM location';
$result = $conn->query($query);

# If there was a problem reading the query
if (!$result) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed";
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output);
	exit;
}

# If there wasn't a problem reading the query we procced to read all the locations
while ($row = mysqli_fetch_assoc($result)) {
	array_push($data, $row);
}
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = $data;
mysqli_close($conn);
echo json_encode($output);