<?php
//Write a PHP function to remove duplicates from an array 
function dup($array){
    return array_unique($array);
}
$array=array(2,4,7,4,8,4);

echo "<pre>";
print_r(dup($array));
echo "</pre>";
?>