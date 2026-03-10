<?php
$c = 0;
$f = 33;
$k = 273.15;
$r = 0;

function hitungSuhu() {
    global $c, $f, $k, $r;

    $celsius    = $_GET['celsius'] ?? '';
    $fahrenheit = $_GET['fahrenheit'] ?? '';
    $kelvin     = $_GET['kelvin'] ?? '';
    $reamur     = $_GET['reamur'] ?? '';

    if ($celsius !== '') {
        $c = $celsius;
        $f = ($c * 9/5) + 32;
        $k = $c + 273.15;
        $r = $c * 4/5;
    } 
    elseif ($fahrenheit !== '') {
        $f = $fahrenheit;
        $c = ($f - 32) * 5/9;
        $k = $c + 273.15;
        $r = $c * 4/5;
    } 
    elseif ($kelvin !== '') {
        $k = $kelvin;
        $c = $k - 273.15;
        $f = ($c * 9/5) + 32;
        $r = $c * 4/5;
    } 
    elseif ($reamur !== '') {
        $r = $reamur;
        $c = $r * 5/4;
        $f = ($c * 9/5) + 32;
        $k = $c + 273.15;
    }
}

if (isset($_GET['hitung'])) {
    hitungSuhu();
}
?>