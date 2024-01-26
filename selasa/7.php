<?php
$day = date('l');
$date = date('23, 01, 2024');
$nasi_goreng = 30000;
$ayam_bakar = 20000;
$nasi_kebuli = 50000;
$jumlah = $nasi_kebuli + $ayam_bakar + $nasi_goreng;
if ($day == 'Monday') {
    echo "diskon hari ini $jumlah - ($jumlah * 0.02)";
} elseif ($day == 'Friday') {
    echo "diskon hari ini $jumlah - ($jumlah * 0.05)";
} else {
    echo "total harga nya $jumlah - tidak ada diskon pada hari : ". $day;
}

?>