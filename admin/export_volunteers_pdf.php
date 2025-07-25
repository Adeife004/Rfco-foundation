<?php
require __DIR__ . '/../vendor/autoload.php';
include 'db.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, interest, message, reg_date FROM volunteers");
$stmt->execute();
$volunteers = $stmt->fetchAll(PDO::FETCH_ASSOC);

$html = '<h1>Volunteers Data</h1>';
$html .= '<table border="1" cellpadding="10" cellspacing="0">';
$html .= '<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Interest</th><th>Message</th><th>Date</th></tr></thead>';
$html .= '<tbody>';

foreach ($volunteers as $volunteer) {
    $html .= '<tr>';
    $html .= '<td>' . htmlspecialchars($volunteer['id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['first_name']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['last_name']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['email']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['phone']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['interest']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['message']) . '</td>';
    $html .= '<td>' . htmlspecialchars($volunteer['reg_date']) . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody></table>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("volunteers.pdf", array("Attachment" => 1));
?>
