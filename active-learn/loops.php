<!-- while loop -->
<?php

$a =1;
 while ($a <= 10) {
     $a++;
     echo $a."<br>";
 }
 echo " <BR>" . "----------------------------" ." <BR>";
 ?>
 <!-- do while loop -->
 <?php

 $o=5;
 do{
   echo $o++."<br>";

 }while($o<=10);

 echo $o;
 echo " <BR>" . "----------------------------" ." <BR>";
 ?>
 <!-- for loop -->
 <?php

 for ($i=0; $i <=10 ; $i++) { 
  echo $i*$i ."<br>";
 }

 echo " <BR>" . "----------------------------" ." <BR>";
 ?>
 <!-- foreach indexed array -->
 <?php
 $person =array("munther","mutaz","morad","munes","mohammad");
foreach ($person as $value) {
   echo "hello" . " " . $value."<br>";
 }
 echo " <BR>" . "----------------------------" ." <BR>";
 ?>

 <!-- foreach associative array -->
 <?php
 echo "##########################>" . "<br>";
 $person =array(
    "mu"=>"munther",
    "mo"=>"morad",
    "ha"=>"hamad",
    "wa"=>"walid"
 );
 foreach ($person as $key => $value) {
   print_r($key."=>".$value."<br>"); 
 }
 echo "---------------------------------<br>"
 ?>

 <!-- foreach multidimensional -->
 <?php
$users=[
    ["name"=>"khaled", "email"=>"khaled@gmail.com"],
    ["name"=>"maha", "email"=>"maha@gmail.com"],
];
for ($y=0;$y<count($users);$y++){
    foreach($users[$y] as $key =>$value){
        echo "$key : $value" . "<br>";
    }
}

?>