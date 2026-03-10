<?php
    // jika isset sudah benar maka 
    // kembalikan nilai 
    // lainnya, kembalikan "belum ada umurnya"



 function cek_data($data){

    if(isset($_GET[$data]) == true){
                    echo $_GET[$data];
                }else{
                    echo"kata belum ada";
              }
            }      

?>



<html>
    <head>
        <title>cek umur</title>
    </head>
    <body>
        <h2>
        <?php
        cek_data('kata')
        
        ?>
        </h2>
        <hr>
        <form action="" method="get">
            <label>umur</label>
            <input type="number" name="umur">
            <input type="submit" value="cek umur"> 
        </form>    
    </body>
</html>