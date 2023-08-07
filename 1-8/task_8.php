<?php

$array1=array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);

$arrMer=array_merge($array1, $array2);
echo "<pre>";
print_r($arrMer);
echo "</pre>";

?>