<?php
// Database configuration with environment detection
$is_localhost = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) || strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

if ($is_localhost) {
    // Local development configuration (XAMPP)
    $servername = "localhost";
    $username = "root";  // Default XAMPP username
    $password = "";      // Default XAMPP password (empty)
    $dbname = "rfcofoundation_db";  // Database name
} else {
    // Production server configuration
    // IMPORTANT: Replace these with your actual production database credentials
    $servername = "localhost";  // Usually localhost for shared hosting
    $username = "your_production_username";  // Replace with actual username
    $password = "your_production_password";  // Replace with actual password
    $dbname = "your_production_database";    // Replace with actual database name
    
    // Alternative: Use environment variables if available
    if (getenv('DB_HOST')) {
        $servername = getenv('DB_HOST');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');
        $dbname = getenv('DB_NAME');
    }
}

// Global variable to track database connection status
$database_available = false;
$conn = null;

// Function to check if database is properly configured
function isDatabaseConfigured() {
    global $username, $password, $dbname;
    
    // Check if production credentials are still placeholder values
    if ($username === 'your_production_username' || 
        $password === 'your_production_password' || 
        $dbname === 'your_production_database') {
        return false;
    }
    
    return true;
}

// Function to get database connection
function getDatabaseConnection() {
    global $conn, $database_available, $servername, $username, $password, $dbname, $is_localhost;
    
    // If already connected, return existing connection
    if ($conn && $database_available) {
        return $conn;
    }
    
    // Check if database is configured
    if (!$is_localhost && !isDatabaseConfigured()) {
        return null;
    }
    
    try {
        // First, connect without database to create it if it doesn't exist (only for localhost)
        if ($is_localhost) {
            $conn = new PDO("mysql:host=$servername", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Create database if it doesn't exist (only for localhost)
            $conn->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        }
        
        // Connect to the specific database
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $database_available = true;
        return $conn;
        
    } catch(PDOException $e) {
        // Log error for debugging
        error_log("Database connection failed: " . $e->getMessage());
        
        $database_available = false;
        return null;
    }
}

// Function to handle form submission without database
function handleFormSubmissionWithoutDB($form_data, $form_type) {
    // For production without database, you could:
    // 1. Send email notification
    // 2. Log to file
    // 3. Send to external service
    
    $message = "Form submission received:\n";
    $message .= "Type: " . $form_type . "\n";
    $message .= "Time: " . date('Y-m-d H:i:s') . "\n";
    $message .= "Data: " . print_r($form_data, true) . "\n";
    
    // Log to file (optional)
    $log_file = 'form_submissions.log';
    file_put_contents($log_file, $message . "\n---\n", FILE_APPEND | LOCK_EX);
    
    // You could also send email notification here
    // mail('admin@yourdomain.com', 'New Form Submission', $message);
    
    return true;
}

try {
    $conn = getDatabaseConnection();
    
    if ($conn) {
        $database_available = true;
    } else {
        $database_available = false;
    }
    
} catch(PDOException $e) {
    // Log error for debugging
    error_log("Database connection failed: " . $e->getMessage());
    
    // Show user-friendly error message only if explicitly trying to use database
    if (isset($_GET['debug_db']) || isset($_POST['debug_db'])) {
        if (strpos($e->getMessage(), '2002') !== false) {
            if ($is_localhost) {
                die("Database connection failed: MySQL service is not running. Please start MySQL in XAMPP Control Panel.");
            } else {
                die("Database connection failed: Unable to connect to the database server. Please contact your hosting provider.");
            }
        } elseif (strpos($e->getMessage(), '1045') !== false) {
            if ($is_localhost) {
                die("Database connection failed: Access denied. Please check your XAMPP MySQL username and password.");
            } else {
                die("Database connection failed: Invalid database credentials. Please update the database configuration in includes/db.php");
            }
        } elseif (strpos($e->getMessage(), '1049') !== false) {
            if ($is_localhost) {
                die("Database connection failed: Database '$dbname' does not exist. Please create it in phpMyAdmin.");
            } else {
                die("Database connection failed: Database '$dbname' does not exist. Please create it in your hosting control panel.");
            }
        } else {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
?>
