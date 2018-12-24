<?php
$host = 'localhost';
$username = 'mixfagvm_sk';
$password = '@Sagark00l';
$database = 'mixfagvm_db';
$db = mysqli_connect($host,$username,$password,$database);
if ($db->connect_errno) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . $mysqli->connect_errno);
}
?>