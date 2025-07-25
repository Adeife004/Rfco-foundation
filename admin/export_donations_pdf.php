<?php
require __DIR__ . '/../vendor/autoload.php';
include 'db.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, category, message, reg_date FROM donations");
$stmt->execute();
$donations = $stmt->fetchAll(PDO::FETCH_ASSOC);

$html = '<h1>Donations Data</h1>';
$html .= '<table border="1" cellpadding="10" cellspacing="0">';
$html .= '<thead><tr><th>ID</th><th>Donor Name</th><th>Email</th><th>Phone</th><th>Category</th><th>Message</th><th>Date</th></tr></thead>';
$html .= '<tbody>';

foreach ($donations as $donation) {
    $html .= '<tr>';
    $html .= '<td>' . htmlspecialchars($donation['id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($donation['first_name'] . ' ' . $donation['last_name']) . '</td>';
    $html .= '<td>' . htmlspecialchars($donation['email']) . '</td>';
    $html .= '<td>' . htmlspecialchars($donation['phone']) . '</td>';
    $html .= '<td>' . htmlspecialchars($donation['category']) . '</td>';
    $html .= '<td>' . htmlspecialchars($donation['message']) . '</td>';
    $html .= '<td>' . htmlspecialchars($donation['reg_date']) . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody></table>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("donations.pdf", array("Attachment" => 1));
?>
