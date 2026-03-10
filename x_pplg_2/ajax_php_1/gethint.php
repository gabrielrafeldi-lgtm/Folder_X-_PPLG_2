<?php
// Array with names
$a[] = "Aerizt"
$a[] = "April";
$a[] = "Ahmad Faruk";
$a[] = "Caroline";
$a[] = "Dave";
$a[] = "Devin";
$a[] = "Denis";
$a[] = "Dharma";
$a[] = "Felix";
$a[] = "Fenny";
$a[] = "Forbe";
$a[] = "Gabriel";
$a[] = "Gerald";
$a[] = "Jo calvin";
$a[] = "John";
$a[] = "Jordan";
$a[] = "Joshua";
$a[] = "Juan";
$a[] = "keelyn";
$a[] = "";











// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;

?>