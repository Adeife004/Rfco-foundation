<?php
// Database connection
include 'admin/db.php';

// Insert form data into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$interest = $_POST['interest'];
	$message = $_POST['message'];

	$sql = "INSERT INTO volunteers (first_name, last_name, email, phone, interest, message) VALUES ('$first_name', '$last_name', '$email', '$phone', '$interest', '$message')";

	if ($conn->query($sql) === TRUE) {
		$volunteer_id = $conn->insert_id;
		header("Location: volunteer_print.php?id=$volunteer_id");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
