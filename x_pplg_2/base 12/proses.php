<?php

function db(){
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "root",
        "vegan"
    );
    return $koneksi;
}
function tambah($data){
    $query = "INSERT INTO sayur VALUES(NULL,'$data')";
    mysqli_query(db(),$query);
    ?>
    <script>
        alert("data Telah Ditambhakn")
    </script>
    <?php
}
function rubah($id,$data_baru){
    $query = "UPDATE sayur SET nama = '$data_baru' WHERE id_sayur = $id ";
    mysqli_query(db(),$query); 
    ?>
    <script>
        alert("data Telah Ditambhakn");
        location.href = "index.php";                    
    </script>
    <?php
}

function tampil(){
    $query = "SELECT * FROM sayur";
    $source = mysqli_query(db(),$query);
    return $source;
}

function cek_data($data){
    // isset = cek apakah datanya sudah dicek
    if(isset($_GET[$data]) == true){
        // NULL = data yang dikirm kosong
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}
// jika data dari dor sama dengan tambah
// panggil tambah(cek_data(sayur))
if (cek_data("dor") == "tambah"){
    tambah (cek_data("sayur"));
}else if(cek_data("dor") == "rubah"){
    rubah(cek_data("id"),cek_data("rubah_sayur"));
}
?>
