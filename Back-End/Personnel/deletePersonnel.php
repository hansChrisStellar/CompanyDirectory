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

# Query to delete the personnel if there was not a relation
$query = $conn->prepare('DELETE FROM personnel WHERE id=?');
$query->bind_param("i", $_POST['idUser']);
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

# Update the quantity number of pers on deps and deps on locs
$conn->query("UPDATE department SET empNmbr = 0");
$conn->query("UPDATE department D, (
		SELECT P.departmentID, COUNT(P.id) AS total_emp 
		FROM personnel P
		GROUP BY P.departmentID
		) S
SET D.empNmbr = S.total_emp
WHERE D.id = S.departmentID");

$conn->query("UPDATE location SET personnelQuanity = 0");
$conn->query("UPDATE location L, (
		SELECT P.locationID, COUNT(P.id) AS total_emp 
		FROM personnel P
		GROUP BY P.locationID
		) S
SET L.personnelQuanity = S.total_emp
WHERE L.id = S.locationID"); 

# If there was not any error with the query
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data'] = [];
mysqli_close($conn);
echo json_encode($output);