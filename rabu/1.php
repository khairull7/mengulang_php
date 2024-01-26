<?php
$saldo = 850000; 
$bunga = 5;

$total = $saldo + ($saldo > 500000 ? $saldo * ($bunga / 100) : 0);

echo "Total saldo Andi: " . $total;  
?>
