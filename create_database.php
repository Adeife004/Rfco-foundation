<?php
/**
 * Database Creation Script
 * Rev. Fr. Callistus Osiaga Foundation
 * 
 * This script creates the necessary database tables for the foundation website.
 * Run this script once to set up the database structure.
 */

// Database connection
require_once 'includes/db.php';

try {
    // Create volunteers table
    $conn->exec("CREATE TABLE IF NOT EXISTS volunteers (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(100) NOT NULL,
        last_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        phone VARCHAR(20) NOT NULL,
        interest VARCHAR(200) NOT NULL,
        message TEXT,
        status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Create donations table
    $conn->exec("CREATE TABLE IF NOT EXISTS donations (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(100) NOT NULL,
        last_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        category VARCHAR(100) NOT NULL,
        message TEXT,
        amount DECIMAL(10,2) DEFAULT 0.00,
        status ENUM('pending', 'confirmed', 'completed') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_category (category),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Create fundraising table
    $conn->exec("CREATE TABLE IF NOT EXISTS fundraising (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(100) NOT NULL,
        last_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        category VARCHAR(100) NOT NULL,
        message TEXT,
        status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_category (category),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Create contacts table
    $conn->exec("CREATE TABLE IF NOT EXISTS contacts (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        subject VARCHAR(200) NOT NULL,
        message TEXT NOT NULL,
        status ENUM('unread', 'read', 'replied') DEFAULT 'unread',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Create subscriptions table
    $conn->exec("CREATE TABLE IF NOT EXISTS subscriptions (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(100) NOT NULL UNIQUE,
        status ENUM('active', 'unsubscribed') DEFAULT 'active',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Create admin users table
    $conn->exec("CREATE TABLE IF NOT EXISTS admin_users (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(100) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        full_name VARCHAR(100) NOT NULL,
        role ENUM('admin', 'moderator') DEFAULT 'moderator',
        is_active BOOLEAN DEFAULT TRUE,
        last_login TIMESTAMP NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_username (username),
        INDEX idx_email (email),
        INDEX idx_role (role)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Insert default admin user (password: admin123)
    $default_password = password_hash('admin123', PASSWORD_DEFAULT);
    $conn->exec("INSERT IGNORE INTO admin_users (username, email, password_hash, full_name, role) 
                 VALUES ('admin', 'admin@rfcofoundation.org', '$default_password', 'System Administrator', 'admin')");

    echo "<div style='font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f9f9f9; border-radius: 10px;'>";
    echo "<h2 style='color: #2c3e50; text-align: center;'>✅ Database Setup Complete</h2>";
    echo "<p style='color: #34495e; line-height: 1.6;'>All database tables have been created successfully!</p>";
    echo "<h3 style='color: #2c3e50;'>Created Tables:</h3>";
    echo "<ul style='color: #34495e; line-height: 1.6;'>";
    echo "<li><strong>volunteers</strong> - Volunteer applications</li>";
    echo "<li><strong>donations</strong> - Donation requests</li>";
    echo "<li><strong>fundraising</strong> - Fundraising requests</li>";
    echo "<li><strong>contacts</strong> - Contact form submissions</li>";
    echo "<li><strong>subscriptions</strong> - Newsletter subscriptions</li>";
    echo "<li><strong>admin_users</strong> - Admin user accounts</li>";
    echo "</ul>";
    echo "<h3 style='color: #2c3e50;'>Default Admin Account:</h3>";
    echo "<p style='color: #34495e; line-height: 1.6;'>";
    echo "<strong>Username:</strong> admin<br>";
    echo "<strong>Password:</strong> admin123<br>";
    echo "<strong>Email:</strong> admin@rfcofoundation.org";
    echo "</p>";
    echo "<p style='color: #e74c3c; font-weight: bold;'>⚠️ Important: Change the default password immediately after first login!</p>";
    echo "<p style='text-align: center; margin-top: 30px;'>";
    echo "<a href='index.php' style='background: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Go to Website</a>";
    echo "</p>";
    echo "</div>";

} catch (PDOException $e) {
    echo "<div style='font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #fdf2f2; border: 1px solid #f5c6cb; border-radius: 10px;'>";
    echo "<h2 style='color: #721c24; text-align: center;'>❌ Database Setup Failed</h2>";
    echo "<p style='color: #721c24;'>Error: " . $e->getMessage() . "</p>";
    echo "<p style='color: #721c24;'>Please check your database connection settings in includes/db.php</p>";
    echo "</div>";
}
?>
