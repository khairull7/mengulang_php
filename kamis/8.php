<?php
$nilai = [75, 77, 87, 70, 90, 81, 69, 87, 66]; 

$kompeten = [];
$belum_kompeten = [];

foreach ($nilai as $nilai_siswa) {
    if ($nilai_siswa >= 75) { 
        $kompeten[] = $nilai_siswa; 
    } else { 
        $belum_kompeten[] = $nilai_siswa; 
    }
}

echo "Kelompok Kompeten: " . implode(", ", $kompeten) . "<br>";

echo "Kelompok Belum Kompeten: " . implode(", ", $belum_kompeten) . "<br>";
?>
