<?php

class factorial{
    function  calcFactorial($num){
        $fac=1;
        for($i=1;$i<=$num;$i++){
            $fac*=$i;
        }
        return $fac;
    }
}
$obj=new factorial();
echo $obj->calcFactorial(5);
?>