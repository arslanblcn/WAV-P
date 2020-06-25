<?php
	$servername = "localhost";
	$username = "wavp"; //CHANGE THIS
	$password = "wavp";	// CHANGE THIS
	$database = "wavp";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	mysqli_select_db($conn, $database);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>