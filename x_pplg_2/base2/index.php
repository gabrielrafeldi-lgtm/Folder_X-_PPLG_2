<?php

// super global variabel
// $_GET['nama input']= ambil data get
// $_POST['nama input'] = ambil data post


$umur = 17 ;
if ($umur < 18){
    echo "tidak dapat ktp";
}else{
    echo "dapat ktp";
}
// shorthand if else = lebih singkat
$ya = ($umur < 18 )? "tidak dapat ktp": "dapat ktp";
echo $ya ;

?>