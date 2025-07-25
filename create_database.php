<?php
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
$sql = "CREATE DATABASE rfcof";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db("rfcof");

// Create volunteers table
$sql = "CREATE TABLE volunteers (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	phone VARCHAR(15) NOT NULL,
	interest VARCHAR(50) NOT NULL,
	message TEXT NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table volunteers created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

// Create fundraising table
$sql = "CREATE TABLE fundraising (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	phone VARCHAR(15) NOT NULL,
	category VARCHAR(50) NOT NULL,
	message TEXT NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table fundraising created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

// Create donations table
$sql = "CREATE TABLE donations (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	phone VARCHAR(15) NOT NULL,
	category VARCHAR(50) NOT NULL,
	message TEXT NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table donations created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

// Create subscriptions table
$sql = "CREATE TABLE subscriptions (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table subscriptions created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
