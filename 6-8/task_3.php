<?php
//Write a PHP script to check if the all string characters are lower cases

function isLower($str){
    if(strtolower($str)==$str){
        echo "Your String is Ok ";
    }else{
        echo "Your String is not OK";
    }    
}
isLower("Batool");

?>