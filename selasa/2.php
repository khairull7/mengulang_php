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
    <title>Waktu Tidur</title>
</head>
<body>
    <div class="container">
        <?php
            $usia = 17;

            if ($usia >= 6 && $usia <= 12) {
                $waktuTidur = 10;
            } elseif ($usia > 12 && $usia < 18) {
                $waktuTidur = 8; 
            } elseif ($usia >= 18 && $usia <= 40) {
                $waktuTidur = 7; 
            } else {
                $waktuTidur = "Tidak masuk dalam kategori";
            }

            echo "<p>Usia $usia tahun</p>";
            echo "<p>Waktu tidur yang baik adalah $waktuTidur jam</p>";
        ?>
    </div>
</body>
</html>
