<?php
$waktu1 = "19:00";
$waktu2 = "08:55";

$waktu1_format = date("h:i a", strtotime($waktu1)) ?: $waktu1;
$waktu2_format = date("h:i a", strtotime($waktu2)) ?: $waktu2;

echo "Waktu pertama: " . $waktu1_format . "\n";
echo "<br>";
echo "Waktu kedua: " . $waktu2_format . "\n";
?>
