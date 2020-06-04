<?php
$servername = "classmysql.engr.oregonstate.edu";
$username = "cs340_xuy6";
$password = "2849";
$dbname = "cs340_xuy6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM user WHERE username = '132'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
