<?php
function add1($a){
 return $a +1;

}
echo 'This is'.add1(11)."<br>";
?> 



<?php
function small_numbers()
{
    return [0, 1, 2];
}
print_r(small_numbers());
[$zero, $one, $two] = small_numbers();
list($zero, $one, $two) = small_numbers();
?>

<!--          parameters                   -->
<?php
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee()."<br>";
echo makecoffee(null) ."<br>";
echo makecoffee("espresso")."<br>";
?>