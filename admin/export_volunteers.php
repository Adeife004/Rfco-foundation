<?php
include 'db.php';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="volunteers.xls"');

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, interest, message, reg_date FROM volunteers");
$stmt->execute();
$volunteers = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "ID\tFirst Name\tLast Name\tEmail\tPhone\tInterest\tMessage\tDate\n";

foreach ($volunteers as $volunteer) {
    echo $volunteer['id'] . "\t" . $volunteer['first_name'] . "\t" . $volunteer['last_name'] . "\t" . $volunteer['email'] . "\t" . $volunteer['phone'] . "\t" . $volunteer['interest'] . "\t" . $volunteer['message'] . "\t" . $volunteer['reg_date'] . "\n";
}
?>
