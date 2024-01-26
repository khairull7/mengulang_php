<?php
$total_belanja = 160000; 
$diskon = 10000;

if ($total_belanja >= 150000) {
    echo "Anda mendapatkan voucher Rp. 10.000 dan 1 dus permen kaki";
} elseif ($total_belanja >= 100000 && $total_belanja < 150000) {
    echo "Anda mendapatkan voucher potongan harga sebesar Rp. 10.000";
} else {  
    echo "Tidak mendapatkan voucher";
}
?>