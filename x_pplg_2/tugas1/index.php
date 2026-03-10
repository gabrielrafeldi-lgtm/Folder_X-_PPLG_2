<?php
include 'kalkulasi.php';
?>

<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

    <h1>Celcius = <?php echo $c; ?> <span>°C</span></h1>
    <h1>Fahrenheit = <?php echo $f; ?> <span>°F</span></h1>
    <h1>Kelvin = <?php echo $k; ?> <span>K</span></h1>
    <h1>Reamur = <?php echo $r; ?> <span>°R</span></h1>

    <form action="" method="get">
        <label>Celcius</label>
        <input type="number" name="celsius" step="any">
        <button type="submit" name="hitung">Hitung</button>
        <br><br>

        <label>Fahrenheit</label>
        <input type="number" name="fahrenheit" step="any">
        <button type="submit" name="hitung">Hitung</button>
        <br><br>

        <label>Kelvin</label>
        <input type="number" name="kelvin" step="any">
        <button type="submit" name="hitung">Hitung</button>
        <br><br>

        <label>Reamur</label>
        <input type="number" name="reamur" step="any">
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <br>
    <a href="index.php">
        <button>Bersihkan</button>
    </a>

</body>
</html>