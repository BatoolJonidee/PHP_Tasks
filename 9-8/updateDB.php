<?php
require("connect.php");


$id=$_GET['id'];
$usernameup=$_POST["usernameup"];
$addressesup=$_POST["addressesup"];
$salaryup=$_POST["salaryup"];

$sql = "UPDATE employees SET userName='$usernameup',addresses='$addressesup', salary='$salaryup' WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->execute()){
  header("Location: index.php");
} 
  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";

?>