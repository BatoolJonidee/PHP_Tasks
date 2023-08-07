<?php
//Write a PHP function to check if a number is an Armstrong number or not ?
function armstrongNum($num){
    
    $str=(string)$num;
    $sum=0;
    for($i=0; $i<strlen($str); $i++){
        $sum+=pow((int)$str[$i],strlen($str));
    }
    if($sum==$num){
        echo "$num is Armstrong Number ";
    }else{
        echo "$num is not Armstrong Number ";
    }
}
$num=407;
armstrongNum($num);

?>