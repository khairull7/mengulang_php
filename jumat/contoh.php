<?php

function tabungan($jumlah, $bulan) {
    $total = $jumlah + ($jumlah * $bulan / 100);
    return 'Rp. ' .number_format($total,0,',','.');
}

echo tabungan(4250000, 10)
?>