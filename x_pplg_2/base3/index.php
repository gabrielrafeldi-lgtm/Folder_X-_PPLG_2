<?php
// koneksi dari php ke mysql
$data = mysqli_connect(
    "localhost",
    "root",   #nama myadmindphp
    "root",   #password
    "xpplg2"  #nama folder
);

var_dump($data);

?>]