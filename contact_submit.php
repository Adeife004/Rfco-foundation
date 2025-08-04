<?php
// Start session for security
session_start();

// Database connection
require_once 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Sanitize and validate input data
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }
        
        // Validate required fields
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            throw new Exception("All fields are required");
        }
        
        // Check if database is available
        if ($database_available && $conn) {
            // Ensure the 'contacts' table exists
            try {
                $conn->exec("CREATE TABLE IF NOT EXISTS contacts (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(100) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    subject VARCHAR(200) NOT NULL,
                    message TEXT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )");
            } catch (PDOException $e) {
                throw new Exception("Database error: " . $e->getMessage());
            }
            
            // Prepare SQL statement with placeholders to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
            
            // Bind parameters
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':subject', $subject, PDO::PARAM_STR);
            $stmt->bindParam(':message', $message, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $_SESSION['success_message'] = "Message sent successfully! We'll get back to you soon.";
            } else {
                throw new Exception("Failed to send message");
            }
        } else {
            // Database not available, handle without database
            $form_data = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            ];
            
            if (handleFormSubmissionWithoutDB($form_data, 'contact')) {
                $_SESSION['success_message'] = "Message sent successfully! We'll get back to you soon.";
            } else {
                throw new Exception("Failed to send message");
            }
        }
        
    } catch (Exception $e) {
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
    }
    
    // Redirect back to contact page
    header("Location: contact.php");
    exit();
} else {
    // If not POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?>
