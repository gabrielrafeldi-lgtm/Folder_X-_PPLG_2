<?php 

function angka2(){
    echo 16;  //echo = hanya menampilkan
}

function angka3(){
    return 16; //return = sama kek variebel
    // mengisi nilai fungsinya
    // jika dipanggil fungsinya
    // fungsi akan memberikan nilai return 
}

$angka1 = 16 ;
if(angka3() >= 15){
    echo "dewasa";
}else{
    echo"bocil";
}
?>