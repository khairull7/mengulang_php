<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        p:last-child {
            border: none;
        }
    </style>
    <title>Kompensasi Dani</title>
</head>
<body>
    <div class="container">
        <?php
            $jamKerjaPerHari = 8;
            $kompensasiPerJam = 30000;
            $waktuMasuk = 8;
            $waktuPulang = 22;

            $totalJamKerja = $waktuPulang - $waktuMasuk;

            if ($totalJamKerja > $jamKerjaPerHari) {
                $jamLebih = $totalJamKerja - $jamKerjaPerHari;
                $kompensasi = $jamLebih * $kompensasiPerJam;
            } else {
                $kompensasi = 0;
            }

            echo "<p>Kompensasi yang diterima Dani: Rp " . number_format($kompensasi, 0, ',', '.') . "</p>";
        ?>
    </div>
</body>
</html>
