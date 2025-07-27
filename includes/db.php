<?php
// Database configuration for local development (XAMPP)
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password (empty)
$dbname = "rfcofoundation_db";  // Database name

try {
    // First, connect without database to create it if it doesn't exist
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if it doesn't exist
    $conn->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    
    // Connect to the specific database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    // Log error for debugging
    error_log("Database connection failed: " . $e->getMessage());
    
    // Show user-friendly error message
    if (strpos($e->getMessage(), '2002') !== false) {
        die("Database connection failed: MySQL service is not running. Please start MySQL in XAMPP Control Panel.");
    } else {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
