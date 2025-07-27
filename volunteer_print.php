<?php
// Database connection
include 'admin/db.php';
// Fetch volunteer data from database
$volunteer_id = $_GET['id'];
$sql = "SELECT * FROM volunteers WHERE id = $volunteer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
} else {
	echo "No record found";
	exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Volunteer Confirmation</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="shortcut icon" href="assets/img/logo/logo_f.png" type="image/x-icon">
		
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div class="container mt-5">
			<div class="card">
				<div class="card-header">
					<h3>Volunteer Confirmation</h3>
				</div>
				<div class="card-body">
					<p>Thank you, <strong><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></strong>, for your interest in volunteering with the Rev. Fr. Callistus Osiaga Foundation.</p>
					<p>We have received your application and will reach out to you via phone or email within the next 24 hours.</p>
					<p><strong>Volunteer Details:</strong></p>
					<ul>
						<li><strong>Name:</strong> <?php echo $row['first_name'] . ' ' . $row['last_name']; ?></li>
						<li><strong>Email:</strong> <?php echo $row['email']; ?></li>
						<li><strong>Phone:</strong> <?php echo $row['phone']; ?></li>
						<li><strong>Interest:</strong> <?php echo $row['interest']; ?></li>
						<li><strong>Message:</strong> <?php echo $row['message']; ?></li>
					</ul>
					<p>We look forward to working with you to make a positive impact in our community.</p>
					<button onclick="window.print()" class="btn btn-primary">Print Confirmation</button>
				</div>
			</div>
		</div>
	</body>
</html>
