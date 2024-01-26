<?php
$data = [
    [
        'nama' => 'Andi',
        'rombel' => 'PPLG XI-1',
        'rayon' => 'Ciawi 4',
        'jk' => 'L',
    ],
    [
        'nama' => 'Sasa',
        'rombel' => 'PPLG XI-6',
        'rayon' => 'Sukasari 1',
        'jk' => 'P',
    ],
    [
        'nama' => 'Beni',
        'rombel' => 'PPLG XI-6',
        'rayon' => 'Sukasari 1',
        'jk' => 'L',
    ],
    [
        'nama' => 'Lala',
        'rombel' => 'PPLG XI-2',
        'rayon' => 'Cicurug 2',
        'jk' => 'P',
    ],
];

foreach ($data as $siswa) {
    echo "Nama: " . $siswa['nama'] . "<br>";
    echo "Rombel: " . $siswa['rombel'] . "<br>";
    echo "Rayon: " . $siswa['rayon'] . "<br>";
    echo "Jenis Kelamin: " . $siswa['jk'] . "<br><br>";
}
?>
