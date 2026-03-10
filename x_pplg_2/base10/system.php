<?php
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

    function luas_segitiga($alas, $tinggi){
        return 0.5 * cek_data($alas) * cek_data($tinggi);
    };


    function luas_persegi($alas, $tinggi){
        return 0.5 * cek_data($alas) * cek_data($tinggi);
    };

    


?>
