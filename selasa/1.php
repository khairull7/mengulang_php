<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .grade {
            font-size: 24px;
            color: #008080;
        }
    </style>
    <title>Ujian Result</title>
</head>
<body>
    <div class="result-container">
        <?php
            $nilai = 75;

            if ($nilai > 90) {
                $predikat = 'A';
            } elseif ($nilai > 75) {
                $predikat = 'B';
            } else {
                $predikat = 'C';
            }

            echo "<div class='result'>Nilai ujian adalah $nilai</div>";
            echo "<div class='grade'>Predikat : $predikat</div>";
        ?>
    </div>
</body>
</html>
