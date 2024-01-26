<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => '2000',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ],
];

foreach ($data as $orang) {
    $tahun = $orang['tahun'];

    if (($tahun % 4 == 0 )) {
        echo $orang['nama'] . ' lahir pada tahun kabisat ' . $tahun . "<br>";
    } else {
        echo $orang['nama'] . ' tidak lahir pada tahun kabisat ' . $tahun . "<br>";
    }
}
?>
