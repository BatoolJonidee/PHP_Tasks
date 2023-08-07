<?php
$words=array("abcd","abc","de","hjjj","g","wer");

$min=10;
$max=0;
foreach ($words as $value) {
    if($min >= strlen($value)){
        $min=strlen($value);
    }
    if($max <= strlen($value)){
        $max=strlen($value);
    }
}
echo "The shortest array length is $min,  The longest array length is $max."

?>