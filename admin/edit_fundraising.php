<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
	header('Location: login.php');
	exit();
}
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$category = $_POST['category'];
	$message = $_POST['message'];

	$sql = "UPDATE fundraising SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', category='$category', message='$message' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		header('Location: fundraising.php');
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

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
		<title>Edit Fundraising</title>
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
			<h2>Edit Fundraising</h2>
			<form action="edit_fundraising.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name']; ?>" required>
				</div>
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name']; ?>" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" required>
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<input type="text" name="category" class="form-control" value="<?php echo $row['category']; ?>" required>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" class="form-control" required><?php echo $row['message']; ?></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
</html>
