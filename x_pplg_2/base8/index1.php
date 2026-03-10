<?php

function cek_data($data){
    if((isset($data)) == true){
        if($_GET[$data] == NULL){
            return "sudaH klik tombol tidak ada isinya"; 
        }else{
            return $GET[$data];
        }
    }else{
        return "anda belum mengisi dan klik tombol"; 
    }
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>
            <?php

            ?>
        </h1>
        <hr>
         <form action="" method="get">
            <label>umur</label>
            <input type="number" name="angka1">
            <input type="submit" value="Cek Angka"> 
        </form>    
    </body>
</html>