<?php

$berat_badan = 44; 
$tinggi_badan = 148;

$imt = $berat_badan / (($tinggi_badan / 100) * ($tinggi_badan / 100));

if ($imt < 18.5) {
   echo "Berat badan kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
   echo "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
   echo "Berat badan lebih";
} else {
   echo "Obesitas";
}


?>
