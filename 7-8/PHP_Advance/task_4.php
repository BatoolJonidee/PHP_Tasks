<?php

class sortArray{
    function sortArr($array){
        sort($array);
        return $array;
    }
}
$obj=new sortArray();
$array=[11, -2, 4, 35, 0, 8, -9];
echo "<pre>";
print_r($obj->sortArr($array));
echo "</pre>";
?>