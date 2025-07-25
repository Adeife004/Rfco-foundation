<?php
include 'admin/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Ensure the 'subscriptions' table exists
    try {
        $conn->exec("CREATE TABLE IF NOT EXISTS subscriptions (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(50) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )");
    } catch (PDOException $e) {
        echo "Error creating table: " . $e->getMessage();
    }

    $stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (:email)");
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "<script>alert('Subscribed successfully.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error subscribing.'); window.history.back();</script>";
    }
}
?>
