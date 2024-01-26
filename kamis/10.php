<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '10000',
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => '15000',
        'jumlah_beli' => 5,
    ],
];

$totalbayar = 0;

foreach ($barang as $item) {
    $harga = $item['harga_barang'];
    $jumlah = $item['jumlah_beli'];
    $subtotal = $harga * $jumlah;
    $totalbayar += $subtotal;
}

echo 'Total biaya belanjaan Beni: ' . number_format($total_bayar, 0, ',', '.') . ' Rupiah';
?>
