<?php

$temp=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$avg=array_sum($temp)/count($temp);
echo "Average Temperature is : " . $avg . "<br><br><br>";

asort($temp);
echo "List of five lowest temperatures :  <br>";
echo "<pre>";
print_r(array_slice($temp, 0, 5));
echo "</pre>";

echo "<br><br>List of five highest temperatures : ";
echo "<pre>";
print_r(array_slice($temp, count($temp)-5));
echo "</pre>";
?>