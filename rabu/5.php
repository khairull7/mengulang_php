<?php
$kehadiran = 100;
$status = "hadir";

$persentase_kehadiran = ($status == "sakit" || $status == "izin") ? ($kehadiran - 3) : (($status === "alpa") ? ($kehadiran - 5) : "tidak berkurang");

echo "Persentase kehadiran siswa: " . $persentase_kehadiran . "";
?>
