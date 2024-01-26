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
    <title>Informasi Kelahiran</title>
</head>
<body>
    <div class="container">
        <?php
            $tahun_andi = 2004;
            $tahun_eko = $tahun_andi - 3;

            echo "<p>Andi lahir di tahun " . $tahun_andi . ".</p>";
            echo "<p>Eko lahir di tahun " . $tahun_eko . ".</p>";
            echo "<br>";

            if ($tahun_andi % 4 == 0 && $tahun_eko % 4 != 0) {
                echo "<p>Andi lahir di tahun kabisat.</p>";
            } elseif ($tahun_eko % 4 == 0 && $tahun_andi % 4 != 0) {
                echo "<p>Eko lahir di tahun kabisat.</p>";
            } else {
                echo "<p>Keduanya tidak lahir di tahun kabisat.</p>";
            }
        ?>
    </div>
</body>
</html>
