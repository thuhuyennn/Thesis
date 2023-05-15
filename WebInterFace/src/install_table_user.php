<?php
//Create Data base if not exists
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Create database
	$sql = "CREATE DATABASE register";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . $conn->error;
	}

	$conn->close();

	echo "<br>";
//Connect to database and create table
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "register";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//Sr No, Station, Status(OK, NM, WM, ACK) Date, Time
	//1         A          NM                 12-5-18    12:15:00 am
	// sql to create table
	$sql = "CREATE TABLE register_user (
	id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(255),
	username VARCHAR(255),
    password VARCHAR(255),
	repassword VARCHAR(255),
    birthday VARCHAR(255),
	address VARCHAR(255),
    email VARCHAR(255),

	telephone VARCHAR(255),
    gender enum('male', 'female'),
	`Date` DATE NULL,
	`Time` TIME NULL, 
	`role` TINYINT(1) NULL DEFAULT 0, 

	`TimeStamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {

	    echo "Table register_user created successfully";

	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>