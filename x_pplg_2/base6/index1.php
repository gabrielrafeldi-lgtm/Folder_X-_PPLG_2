<?php
// fungsi nama (parameter)
function best_moment(){
 echo"merayakan tahun baru bersama keluarga";
}
function best_of_month($bulan){
    echo $bulan,"adalah bulan terbaik ";
}
// parameter bisa lebih dari 1
function tambah($a,$b){
    echo $a,"+",$b,"=",($a+$b);
}
?>
<html>
    <head>
        <title>Function ajah</title>
    </head>
    <body>
        <h1><?php best_moment();?></h1>
        <h1><?php best_of_month("september");?></h1>
        <h1><?php tambah(5,5);?></h1>

    </body>
</html>