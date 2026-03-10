<?php
session_start();//selalu dipake tiap session 
// jika sesion kunci adalah kosong\
if (isset( $_SESSION) == TRUE){
    header("location:../inde.php?status=imigran");

    if($_SESSION["kunci"] == "kosong"){
        header("location:../index.php");
    }
}
?>
<html>
<head>
    <title>Dashbord</title>
</head>
<body>
    <h1>Selamat datang</h1>
    <h2>Dashbord</h2> 
</body>
</html>