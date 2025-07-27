<?php
// Start session for security
session_start();

// Database connection
require_once 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Sanitize and validate email
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }
        
        // Check if email is already subscribed
        $check_stmt = $conn->prepare("SELECT id FROM subscriptions WHERE email = :email");
        $check_stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $check_stmt->execute();
        
        if ($check_stmt->rowCount() > 0) {
            throw new Exception("Email is already subscribed");
        }

        // Ensure the 'subscriptions' table exists
        try {
            $conn->exec("CREATE TABLE IF NOT EXISTS subscriptions (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(100) NOT NULL UNIQUE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )");
        } catch (PDOException $e) {
            throw new Exception("Database error: " . $e->getMessage());
        }

        // Insert new subscription
        $stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (:email)");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = "Subscribed successfully! Thank you for joining our newsletter.";
        } else {
            throw new Exception("Failed to subscribe");
        }
        
    } catch (Exception $e) {
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
    }
    
    // Redirect back to previous page
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    // If not POST request, redirect to home page
    header("Location: index.php");
    exit();
}
?>
