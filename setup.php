<?php
include "settings.php"; 

if (isset($_POST['install'])) {
	if(!$conn){
		die("Couldn't connect :". mysqli_connect_error());
		
	} else {
		echo "Connected Successfully";
		createDatabase($conn, $database);
		createTables($conn, $database);
		addValues($conn, $database);
	}
}

if(isset($_POST['drop'])){
	if(!$conn){
		die ("Couldn't connect : ". mysqli_connect_error());
	} else {
		removeDatabase($conn);
	}
}

function createDatabase($conn, $database){

	$sql = "CREATE DATABASE wavp";
	mysqli_select_db($conn, $database);
	if (mysqli_query($conn, $sql)) {
		echo "DATABASE created <br>";
	} else {
		echo "Error creating database : ". mysqli_error($conn). "<br>";
	}
}

function createTables($conn, $database){

	$sql = "CREATE TABLE users (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL)";
	mysqli_select_db($conn, $database);
	if (mysqli_query($conn, $sql)) {
		echo "Table users created successfully". "<br>";
	} else {
		echo "Error creating users table : ". mysqli_error($conn). "<br>";
	}
	$sql = "CREATE TABLE position (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, position VARCHAR(50) NOT NULL)";
	mysqli_select_db($conn, $database);
	if (mysqli_query($conn, $sql)) {
		echo "Table position created successfully". "<br>";
	} else {
		echo "Error creating position table : ". mysqli_error($conn). "<br>";
	}
}

function addValues($conn, $database){

	$sql = "INSERT INTO users (id, firstname, lastname, email) VALUES (1, 'arslan', 'bilecen', 'arslanwavp@wavp.com'), (2, 'john', 'doe', 'johnwavp@wavp.com'), (3, 'johnny', 'deep', 'johnnyavp@wavp.com'), (4, 'teressa', 'ulrich', 'teressawavp@wavp.com'), (5, 'janny', 'kennen', 'jennywavp@wavp.com'), (6, 'ashley', 'young', 'ashleywavp@wavp.com')";
	mysqli_select_db($conn, $database);
	if(mysqli_query($conn, $sql)){
		echo "Users table values has been added.". "<br>";
	} else {
		echo "Users table values couldn't add ". mysqli_error($conn). "<br>";
	}

	$sql = "INSERT INTO position (id, firstname, lastname, position) VALUES (1, 'arslan', 'bilecen','admin'), (2, 'john', 'doe', 'general menager'), (3, 'johnny', 'deep', 'CEO'), (4, 'janny', 'kennen', 'Software Developer'), (5, 'teressa', 'ulrich', 'Help Desk')";
	if(mysqli_query($conn, $sql)){
		echo "Position table values has been added". "<br>";
	} else {
		echo "Position table values couldn't add ". mysqli_error($conn). "<br>";
	}
}

function removeDatabase($conn){

	$sql = "DROP DATABASE wavp";
	mysqli_select_db($conn, $database);
	if (mysqli_query($conn, $sql)) {
		echo "Database deleted successfully.". "<br>";
	} else {
		echo "Database couldn't delete ". mysqli_error($conn). "<br>";
	}
}
?>