<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
	header('Location: login.php');
	exit();
}

// Role-based access control
if ($_SESSION['admin_role'] !== 'admin') {
    echo "Access denied. You do not have permission to view this page.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin Dashboard</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/consistent-padding.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/color-theme.css">
	</head>
	<body>
		<!-- Header Section -->
		<?php include 'includes/header.php'; ?>
		<!-- Main Content -->
		<div class="container mt-5">
			<h2>Admin Dashboard</h2>
			<p>Welcome, <?php echo $_SESSION['admin_role']; ?>!</p>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Volunteers</h5>
							<p class="card-text">Manage volunteer submissions.</p>
							<a href="volunteers.php" class="btn btn-primary">View Volunteers</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Fundraising</h5>
							<p class="card-text">Manage fundraising submissions.</p>
							<a href="fundraising.php" class="btn btn-primary">View Fundraising</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Donations</h5>
							<p class="card-text">Manage donation submissions.</p>
							<a href="donations.php" class="btn btn-primary">View Donations</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
</html>
