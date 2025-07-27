<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Role-based access control
if ($_SESSION['admin_role'] !== 'admin') {
    echo "Access denied. You do not have permission to view this page.";
    exit();
}

// Fetch donations from the database
$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, category, message, reg_date FROM donations");
$stmt->execute();
$donations = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Donations</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
	<body>
		<!-- Header Section -->
		<?php include 'includes/header.php'; ?>
		<!-- Main Content -->
		<div class="container mt-5">
			<h2>Donations</h2>
			<div class="text-right mb-3">
				<a href="export_donations.php" class="btn btn-success">Download Excel</a>
				<a href="export_donations_pdf.php" class="btn btn-danger">Download PDF</a>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Donor Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Category</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($donations as $donation): ?>
						<tr>
							<td><?php echo htmlspecialchars($donation['id']); ?></td>
							<td><?php echo htmlspecialchars($donation['first_name'] . ' ' . $donation['last_name']); ?></td>
							<td><?php echo htmlspecialchars($donation['email']); ?></td>
							<td><?php echo htmlspecialchars($donation['phone']); ?></td>
							<td><?php echo htmlspecialchars($donation['category']); ?></td>
							<td><?php echo htmlspecialchars($donation['message']); ?></td>
							<td><?php echo htmlspecialchars($donation['reg_date']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
</html>
