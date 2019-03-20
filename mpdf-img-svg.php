<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML("<img src='solar-employment-growth.svg'>");
$mpdf->Output();

?>