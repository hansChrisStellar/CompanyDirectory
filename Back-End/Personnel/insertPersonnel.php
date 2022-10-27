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

# Increment the personnel from the column of departments in the table of Departments
$query = $conn->prepare("UPDATE department D SET D.empNmbr = D.empNmbr + 1 WHERE D.id = ?");
$query->bind_param("i", $_REQUEST['department']);
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

# Insert into the personnels the new personnel
$query = $conn->prepare('INSERT INTO personnel (firstName, lastName, jobTitle, email, departmentID, img) VALUES(?,?,?,?,?,?)');
$query->bind_param("ssssis", $_REQUEST['firstName'], $_REQUEST['lastName'], $_REQUEST['job'], $_REQUEST['email'], $_REQUEST['department'], $_REQUEST['imgUser']);
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

# If all the process was a success
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = [];
mysqli_close($conn);
echo json_encode($output);