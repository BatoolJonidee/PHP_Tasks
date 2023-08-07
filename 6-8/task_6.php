<?php
//Write a PHP function that checks whether a passed string is a palindrome or not?

function palindromeString($string){
    $flag=0;
    $str=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $str1=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $str1=strrev($str1);
    for($i=0; $i<strlen($str1); $i++){
        if(strtolower($str1[$i]) != strtolower($str[$i])){
            $flag+=1;
        }
    }
    if($flag==0){
        echo "Yes it is a palindrome ";
    }else {
        echo "No";
    }
}
$str="Eva, can I see bees in a cave?";
palindromeString(strtolower($str));
?>