<?php

# Database connections and variables $conn
include("../Database.php");
$executionStartTime = microtime(true);
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

# If theres a relation 
$query = 'SELECT COUNT(*) FROM personnel WHERE departmentID	=' . $_POST['id'];
$result = $conn->query($query);
$personnel = [];

while ($row = mysqli_fetch_assoc($result)) {
	array_push($personnel, $row);
}

if (intval($personnel[0]["COUNT(*)"]) > 0) {
	$output['status']['code'] = "400";
	$output['status']['name'] = "executed";
	$output['status']['description'] = "There's personnel in this department, please, remove it, and try again.";
	mysqli_close($conn);
	echo json_encode($output);
	exit;
}

# If there's not a relation, procced to delete department
$query = $conn->prepare('DELETE FROM department WHERE id = ?');
$query->bind_param("i", $_POST['id']);
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

# Update the quantity number of pers on deps and deps on locs
$conn->query("UPDATE location SET dpQuantity = 0");
$conn->query("UPDATE location L, (
		SELECT D.locationID, COUNT(D.id) AS total_deps 
		FROM department D
		GROUP BY D.locationID
		) S
SET L.dpQuantity = S.total_deps
WHERE L.id = S.locationID");

# If there's not a problem, delete the department
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "Department deleted";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = [];
mysqli_close($conn);
echo json_encode($output);