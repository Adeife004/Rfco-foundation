<?php
// Start session for security
session_start();

// Database connection
require_once 'includes/db.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Sanitize and validate input data
        $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
        $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $interest = filter_var($_POST['interest'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }
        
        // Validate required fields
        if (empty($first_name) || empty($last_name) || empty($email) || empty($phone)) {
            throw new Exception("All required fields must be filled");
        }
        
        // Prepare SQL statement with placeholders to prevent SQL injection
        $sql = "INSERT INTO volunteers (first_name, last_name, email, phone, interest, message, created_at) 
                VALUES (:first_name, :last_name, :email, :phone, :interest, :message, NOW())";
        
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':interest', $interest, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        
        // Execute the statement
        if ($stmt->execute()) {
            $volunteer_id = $conn->lastInsertId();
            
            // Set success message in session
            $_SESSION['success_message'] = "Volunteer application submitted successfully!";
            
            // Redirect to print page
            header("Location: volunteer_print.php?id=" . $volunteer_id);
            exit();
        } else {
            throw new Exception("Failed to insert volunteer data");
        }
        
    } catch (Exception $e) {
        // Set error message in session
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
        
        // Redirect back to volunteer form
        header("Location: volunteer.php");
        exit();
    }
} else {
    // If not POST request, redirect to volunteer page
    header("Location: volunteer.php");
    exit();
}
?>
