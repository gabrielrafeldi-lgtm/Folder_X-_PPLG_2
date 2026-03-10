<?php include 'setingan.php'; ?>
<html>
    <head>
        <title>Zodiak</title>
    </head>
    <body>
         <!-- zodiak -->
        <!-- Aries = 21 maret - 19 april -->
        <!-- taurus = 20 april - 20 mei -->
         <!-- gimini = 21 mei - 20 juni -->
          <!-- cancer = 21 juni - 22 juli -->
           <!-- leo = 23 juli - 22 agustus  -->
            <!-- virgo = 23 Agustus - 22 september  -->
             <!-- libra = 23 september - 22 oktober -->
              <!-- scorpio = 20 oktober - 21 november -->
               <!-- sigatarius = 22 november - 21 desember -->
                <!-- Capricorn = 22 Desember - 19 januari -->
                 <!-- Aquarius = 20 januari - 18 Febuari -->
                  <!-- pisces = 19 febuari - 20 maret -->
        <h1>Cek zodiak berdasarkan tanggal dan bulan</h1>
        <h1>zodiak :</h1>
        <hr>
        <form action="" method="get">
            <label>Bulan</label>
            <select name="bulan">
                <option value="1">januari</option>
                <option value="2">Febuari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">september</option>
                <option value="10">oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br>
            <label for="">Tanggal</label>
            <input type="number" name="tgl">
            <input type="submit" value="Cek zodiak">
        </form>
        <a href="index.php">
            <button>Bersihkan</button>
        </a>
    </body>
</html>