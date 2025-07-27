<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
	header('Location: login.php');
	exit();
}
include '../includes/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM fundraising WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Print Fundraising</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
	<body>
		<div class="container mt-5">
			<div class="card">
				<div class="card-header">
					<h3>Fundraising Details</h3>
				</div>
				<div class="card-body">
					<p><strong>ID:</strong> <?php echo $row['id']; ?></p>
					<p><strong>First Name:</strong> <?php echo $row['first_name']; ?></p>
					<p><strong>Last Name:</strong> <?php echo $row['last_name']; ?></p>
					<p><strong>Email:</strong> <?php echo $row['email']; ?></p>
					<p><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
					<p><strong>Category:</strong> <?php echo $row['category']; ?></p>
					<p><strong>Message:</strong> <?php echo $row['message']; ?></p>
					<button onclick="window.print()" class="btn btn-primary">Print</button>
				</div>
			</div>
		</div>
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
</html>
