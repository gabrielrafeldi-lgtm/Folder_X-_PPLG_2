<?php
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

function hasil(){
    if (cek_data('+')== "tambah"){
        return cek_data('angka1')+cek_data('angka2');
    }else if(cek_data('-') == "kurang"){
        return cek_data('angka1')- cek_data('angka2');
    }
}

?>

<html>
  <head>  
    <title>best pracite</title>
</head>
<body>
    <h2>Angka 1 = <?= cek_data('angka1'); ?> </h2>
    <h2>Angka 2 = <?= cek_data('angka2'); ?> <h2>
    <h2>hasil = <?= hasil();?> </h2>

    <hr>
    <form action="" method="get">
        <label>angka 1</label>
        <input type="number" name="angka1">
        <br>
        <label>angka 2</label>
        <input type="number" name="angka2">
        <br>
        <input type="submit" name= "+" value="Tambah">
        <input type="submit" name="-" value="Kurang">
    </form>  
</body>
</html>