<?php
function box($a){
    echo $a;
}
// $data = parameter mengambil data dari
function tampil($data){
    // isset = berguna untuk memastikan
    // apakah sudah ada datanya atau belum
    // $_GET[$data]= manggil data 
    // dari form dengan method get 
    if(isset($_GET[$data]) == true){
                    echo $_GET[$data];
                }else{
                    echo"kata belum ada";
              }
        }
?>

<html>
    <head>
        <title>function</title>
    </head>
    <body>
        <h1>
            <?php
            tampil('kata');
            ?>
        </h1>
        <hr>
            <form action="" method ="get">
                <label>masukan kata</label>
                <input type="text" name="kata">
                <input type="submit" value="kirim">
            </form>
    </body>
</html>