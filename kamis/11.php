<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompokPertama = [];
$kelompokKedua = [];

foreach ($bil1 as $bil) {
    if (in_array($bil, $bil2)) {
        $kelompokPertama[] = $bil;
    } else {
        $kelompokKedua[] = $bil;
    }
}

foreach ($bil2 as $bil) {
    if (!in_array($bil, $bil1)) {
        $kelompokKedua[] = $bil;
    }
}

echo "Kelompok Pertama: " . implode(' ', $kelompokPertama) . "<br>";
echo "Kelompok Kedua: " . implode(', ', $kelompokKedua) . "<br>";
?>
