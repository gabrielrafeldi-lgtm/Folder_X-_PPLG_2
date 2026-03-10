 <?php include 'system.php';?>   <!-- include = mencegah app jalan jika dada eror-->
<?php ?>
<html>
    <head>
        <title>luas segitiga</title>
    </head>
    <body>
        <h1>Alas =<?= cek_data("alas"); ?> </h1>
        <h1>Tinggi =<?= cek_data("tinggi") ?> </h1>
        <h1>hasil = <?= luas_segitiga("alas","tinggi")?></h1>
        <hr>
        <form action="" method="get">
            <label>alas</label>
            <input type="number" name="alas">
            <label>Tinggi</label>
            <input type="number" name="tinggi">
            <input type="submit" value="hasil">
        </form>
    </body>
</html>