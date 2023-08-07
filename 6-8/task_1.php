<?php
//Write a PHP script to check if the inserted number is a prime number 

function prime($num){
    $flag=0;
    for($i=1;$i<$num;$i++){
        if($num%$i==0){
            $flag++;
            // echo "$num is not a prime number ";
            break;
        }
    }
    if($flag==1){
        echo "$num is prime number.";
    }else{
        echo "$num is not prime number";
    }

}
prime(2);
?>