<?php
    require("connect.php");


    $id=$_GET['id'];
    echo $id;
    $sql = "UPDATE employees SET deleteFlag='1' WHERE id=$id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->execute()){
        header("Location: index.php");
    } 

?>