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

// Fetch contacts from the database
$stmt = $conn->prepare("SELECT id, name, email, subject, message, reg_date FROM contacts");
$stmt->execute();
$contacts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contacts</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
	<body>
		<!-- Header Section -->
		<?php include 'includes/header.php'; ?>
		<!-- Main Content -->
		<div class="container mt-5">
			<h2>Contacts</h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($contacts as $contact): ?>
						<tr>
							<td><?php echo htmlspecialchars($contact['id']); ?></td>
							<td><?php echo htmlspecialchars($contact['name']); ?></td>
							<td><?php echo htmlspecialchars($contact['email']); ?></td>
							<td><?php echo htmlspecialchars($contact['subject']); ?></td>
							<td><?php echo htmlspecialchars($contact['message']); ?></td>
							<td><?php echo htmlspecialchars($contact['reg_date']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
</html>
