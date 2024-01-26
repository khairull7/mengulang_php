<?php
$totalHarga = 154000;
$minimalBelanja = 100000;
$diskonPersen = 7;

if ($totalHarga >= $minimalBelanja) {
    $diskon = $totalHarga * ($diskonPersen / 100);
} else {
    $diskon = 0;
}

$bayar = $totalHarga - $diskon;

echo "Harga yang harus dibayar andi adalah : Rp" . $bayar

?>
