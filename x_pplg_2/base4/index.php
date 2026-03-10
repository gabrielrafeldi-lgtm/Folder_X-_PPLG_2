<?php

// looping for using list
$sayur = ["jagung","asem","melinjo","labu siam"];

// tampilkan


// for (star form , boolean, step)
for($a = 0; $a <= 3; $a++){
   echo $a ;
   echo $sayur[$a];
   echo "<br>";
}

// foreach (Target as alias)
foreach($sayur as $a){
    echo $a;
    echo "<br>"
}

?>