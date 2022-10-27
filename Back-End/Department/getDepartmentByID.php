<?php

# Database connections and variables $conn
include("../Database.php");
$executionStartTime = microtime(true);
$data = [];

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

# If there's not an error we procced to read a department by ID 
$query = $conn->prepare('SELECT id, name, locationID, color FROM department WHERE id = ?');
$query->bind_param("i", $_REQUEST['id']);
$query->execute();

# If there was a problem reading the query
if (false === $query) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed";
	$output['data'] = [];
	echo json_encode($output);
	mysqli_close($conn);
	exit;
}

# If there was not a problem reading the query we procced to send the department
$result = $query->get_result();
while ($row = mysqli_fetch_assoc($result)) {
	array_push($data, $row);
}
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = $data;
echo json_encode($output);
mysqli_close($conn);