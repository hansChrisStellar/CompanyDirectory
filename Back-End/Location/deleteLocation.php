<?php

# Database connections and variables $conn
include("../Database.php");
$executionStartTime = microtime(true);

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

# Check if there's a relation within the location and the departments or if theres any department inside the location 
$query = 'SELECT COUNT(*) FROM department WHERE locationID=' . $_REQUEST['idLocation'];
$result = $conn->query($query);
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
	array_push($data, $row);
}

# If theres a relation
if (intval($data[0]["COUNT(*)"]) > 0) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed for relationship";	
	$output['status']['has_relation'] = true;	
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output); 
	exit;
}

# If there's not a relation, procced to delete department
$query = $conn->prepare('DELETE FROM location WHERE id=?');
$query->bind_param("i", $_REQUEST['idLocation']);
$query->execute();

# If there's a problem with the query
if (false === $query) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed";	
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output); 
	exit;
}

# If there's not a problem, delete the department
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = [];
mysqli_close($conn);
echo json_encode($output);