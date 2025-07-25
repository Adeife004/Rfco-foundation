<?php
include 'db.php';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="donations.xls"');

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, category, message, reg_date FROM donations");
$stmt->execute();
$donations = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "ID\tDonor Name\tEmail\tPhone\tCategory\tMessage\tDate\n";

foreach ($donations as $donation) {
    echo $donation['id'] . "\t" . $donation['first_name'] . ' ' . $donation['last_name'] . "\t" . $donation['email'] . "\t" . $donation['phone'] . "\t" . $donation['category'] . "\t" . $donation['message'] . "\t" . $donation['reg_date'] . "\n";
}
?>
