<?php
//Write a PHP function to swap to variables?

function swap(&$num1,&$num2){
    $num3=$num1;
    $num1=$num2;
    $num2=$num3;
}
$x=5;
$y=10;
echo "x = $x, y = $y <br>";
echo "After reverse:<br>";
swap($x,$y);
echo "x = $x, y= $y <br>";

?>