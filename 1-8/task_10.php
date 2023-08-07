<?php
$colors=array("RED","BLUE","WHITE","YELLOW");

$colorsNewArray=array_flip(array_change_key_case(array_flip($colors),CASE_LOWER));
echo "<pre>";
print_r($colorsNewArray);
echo "</pre>";

?>