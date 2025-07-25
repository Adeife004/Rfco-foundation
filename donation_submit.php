<?php
// Database connection
include 'admin/db.php';

// Insert form data into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$category = $_POST['category'];
	$message = $_POST['message'];

	$sql = "INSERT INTO donations (first_name, last_name, email, phone, category, message) VALUES ('$first_name', '$last_name', '$email', '$phone', '$category', '$message')";

	if ($conn->query($sql) === TRUE) {
		$donation_id = $conn->insert_id;
		header("Location: donation_print.php?id=$donation_id");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
