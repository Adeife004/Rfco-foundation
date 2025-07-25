<?php
include 'db.php';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="fundraising.xls"');

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, category, message, reg_date FROM fundraising");
$stmt->execute();
$fundraising = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "ID\tFirst Name\tLast Name\tEmail\tPhone\tCategory\tMessage\tDate\n";

foreach ($fundraising as $fund) {
    echo $fund['id'] . "\t" . $fund['first_name'] . "\t" . $fund['last_name'] . "\t" . $fund['email'] . "\t" . $fund['phone'] . "\t" . $fund['category'] . "\t" . $fund['message'] . "\t" . $fund['reg_date'] . "\n";
}
?>
