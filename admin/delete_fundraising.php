<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
	header('Location: login.php');
	exit();
}
include '../includes/db.php';

$id = $_GET['id'];
$sql = "DELETE FROM fundraising WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header('Location: fundraising.php');
	exit();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
