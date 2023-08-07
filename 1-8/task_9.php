<?php
$colors=array("red","blue","white","yellow");

$colorsNewArray=array_flip(array_change_key_case(array_flip($colors),CASE_UPPER));
echo "<pre>";
print_r($colorsNewArray);
echo "</pre>";

?>