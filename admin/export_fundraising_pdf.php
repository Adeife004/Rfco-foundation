<?php
require __DIR__ . '/../vendor/autoload.php';
include 'db.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone, category, message, reg_date FROM fundraising");
$stmt->execute();
$fundraising = $stmt->fetchAll(PDO::FETCH_ASSOC);

$html = '<h1>Fundraising Data</h1>';
$html .= '<table border="1" cellpadding="10" cellspacing="0">';
$html .= '<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Category</th><th>Message</th><th>Date</th></tr></thead>';
$html .= '<tbody>';

foreach ($fundraising as $fund) {
    $html .= '<tr>';
    $html .= '<td>' . htmlspecialchars($fund['id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['first_name']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['last_name']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['email']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['phone']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['category']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['message']) . '</td>';
    $html .= '<td>' . htmlspecialchars($fund['reg_date']) . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody></table>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("fundraising.pdf", array("Attachment" => 1));
?>
