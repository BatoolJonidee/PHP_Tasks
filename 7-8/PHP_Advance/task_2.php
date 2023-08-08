<?php

class message {
    function dispMessage($name){
        echo "Hello All, I am $name ";
    }
}

$obj=new message();
$obj->dispMessage("Scott");
?>