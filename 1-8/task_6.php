<?php

$fruits=array(
    "d"=>"lemon",
    "a"=>"orange",
    "b"=>"banana",
    "c"=>"apple");
    ksort($fruits);
    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
?>