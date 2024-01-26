<?php

$panjang_tanah = 13;
$lebar_tanah = 9;

$luas_tanah = $panjang_tanah * $lebar_tanah;

if ($luas_tanah < 90) {  
    echo "Tipe rumah: Tipe 36"; 
} elseif ($luas_tanah < 96) {
    echo "Tipe rumah: Tipe 45";
} elseif ($luas_tanah < 120) {
    echo "Tipe rumah: Tipe 54";
} elseif ($luas_tanah < 150) {
    echo "Tipe rumah: Tipe 60";
} else {
    echo "Tipe rumah: Tipe 70";
}

?>
