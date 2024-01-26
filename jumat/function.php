
<?php
function hitungIMT($berat_badan, $tinggi_badan) {
    $imt = $berat_badan / (($tinggi_badan / 100) * ($tinggi_badan / 100));
  
    if ($imt < 18.5) {
      return "Berat badan kurang";
    } elseif ($imt >= 18.5 && $imt < 22.9) {
      return "Normal";
    } elseif ($imt >= 22.9 && $imt < 24.9) {
      return "Berat badan lebih";
    } else {
      return "Obesitas";
    }
  }
  
  $hasil = hitungIMT(44, 148);
  echo "Hasil IMT: $hasil";