<?php include 'proses.php';
// mencari sayur yang id nya sama dengan id url
$query = "SELECT * FROM sayur WHERE id_sayur =".cek_data("id");
// memengil fungsi sql query
$data = mysqli_query(db(),$query);
// memnggil data dari perintanya 
$x = mysqli_fetch_assoc($data);
// fetch = ambil
// assoc = array dalam array()
?>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Rubah Sayur</h1>
    <h2>Pastikan nama sayurnya benarrrr</h2>
    <form action="" method="get">
        <label>rubah sayur</label>
        <input type="hidden" name="id" value ="<?= $x['id_sayur']?>">
        <input type="text" name="rubah_sayur" placeholder="<?= $x["nama"];?>">
        <input type="submit" name="dor" value="rubah">
    </form> 
</body>
</html>