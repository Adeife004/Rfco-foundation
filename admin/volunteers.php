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

// Fetch volunteers from the database
$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, interest, message, reg_date FROM volunteers");
$stmt->execute();
$volunteers = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Volunteers</title>
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
			<h2>Volunteers</h2>
			<div class="text-right mb-3">
				<a href="export_volunteers.php" class="btn btn-success">Download Excel</a>
				<a href="export_volunteers_pdf.php" class="btn btn-danger">Download PDF</a>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Interest</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($volunteers as $volunteer): ?>
						<tr>
							<td><?php echo htmlspecialchars($volunteer['id']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['first_name']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['last_name']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['email']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['phone']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['interest']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['message']); ?></td>
							<td><?php echo htmlspecialchars($volunteer['reg_date']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
</html>
