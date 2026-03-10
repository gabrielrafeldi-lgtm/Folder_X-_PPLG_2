<?php include 'proses.php'; ?>
<html>
    <head>
        <title>CRUD Function</title>
    </head>
    <body>
        <h1>Tambah Sayur</h1>
        <form action="" method="get">
            <label>Sayur</label>
            <input type="text" name="sayur">
            <input type="submit" name="dor" value="tambah">
        </form>
        <a href="index.php">
          <button>refresh</button>
        </a>
        <hr>
        <h1>Daftar Sayur</h1>
        <?php
        $num = 1;
        ?>
        <table border="1">
          <tr>
            <th>no</th>
            <th >Nama Sayur</th>
            <th colspan="2">Aksi</th>
          </tr>
        <?php

        foreach(tampil() as $data){
          ?>
          <tr>
            <td><?= $num ?></td>
            <td><?= $data ['nama']; ?></td>
            <td><a href="hapus.php?id=<?= $data ['id_sayur']; ?>">hapus</a></td>
            <td><a href="rubah.php?id=<?= $data ['id_sayur']; ?>">rubah</a></td>

          </tr>
          <?php
          $num++;
        }
        ?>
        </table>
        <head>
        <title>CRUD Sayur Modern</title>
        <style>
            /* Reset dan Font */
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f4f7f6;
                color: #333;
                margin: 0;
                padding: 40px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                color: #2c3e50;
                font-size: 24px;
                margin-bottom: 20px;
            }

            /* Container Form */
            form {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                margin-bottom: 30px;
                width: 100%;
                max-width: 400px;
                display: flex;
                gap: 10px;
                align-items: center;
            }

            input[type="text"] {
                flex: 1;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                outline: none;
            }

            input[type="text"]:focus {
                border-color: #27ae60;
            }

            /* Tombol-tombol */
            input[type="submit"], button {
                background-color: #27ae60;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 4px;
                cursor: pointer;
                transition: background 0.3s;
            }

            input[type="submit"]:hover, button:hover {
                background-color: #219150;
            }

            a button {
                margin-bottom: 20px;
            }

            /* Styling Tabel */
            table {
                width: 100%;
                max-width: 600px;
                border-collapse: collapse;
                background: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            }

            th, td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #eee;
            }

            th {
                background-color: #2c3e50;
                color: white;
                text-transform: uppercase;
                font-size: 14px;
                letter-spacing: 0.05em;
            }

            tr:hover {
                background-color: #f9f9f9;
            }

            /* Link Aksi */
            td a {
                text-decoration: none;
                padding: 5px 10px;
                border-radius: 4px;
                font-size: 13px;
                font-weight: bold;
            }

            td a[href*="hapus"] {
                color: #e74c3c;
                background: #fdf2f2;
            }

            td a[href*="rubah"] {
                color: #3498db;
                background: #ebf5fb;
            }

            td a:hover {
                opacity: 0.7;
            }

            hr {
                width: 100%;
                max-width: 600px;
                border: 0;
                height: 1px;
                background: #ddd;
                margin: 40px 0;
            }
        </style>
    </head>
    </body>
</html>
