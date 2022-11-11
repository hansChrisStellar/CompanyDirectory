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

# Read all the data from the table of departments
$query = 'SELECT 
	d.id, 
	d.name,
	d.locationID,
	d.empNmbr, 
	d.color, 
	l.name as location
FROM 
	department d
		LEFT JOIN 
	location l ON (l.id = d.locationID)
ORDER BY d.name, l.name';

$result = $conn->query($query);

# If there's an error reading it 
if (!$result) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "query failed";
	$output['data'] = [];
	mysqli_close($conn);
	echo json_encode($output);
	exit;
}

# If theres not an error reading it we procced to send all the data
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