<?php

$zodiak = NULL;

function cek_data($data){
    if(isset($_GET[$data]) == true){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

$cek_bulan = cek_data("bulan");
$cek_tanggal = cek_data("tgl");
if($cek_bulan == 1){

// && = opertor AND akan memberikan output
// ketika nilai keduanya benar
    if($cek_tanggal >= 20 && $cek_tanggal <= 31){
        $zodiak = "Aquarius";
    }elseif($cek_tanggal >= 1 && $cek_tanggal <= 19){
        $zodiak = "capicorn"
    }
}elseif($cek_bulan == 2){
    if($cek_tanggal >= 1 && $cek_tanggal <= 18){
        $zodiak = "Aquarius";
    }elseif($cek_tanggal >= 19 && $cek )

}

?>