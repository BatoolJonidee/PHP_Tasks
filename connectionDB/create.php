<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="CustomerName" placeholder="Customer name.."/><br/><br/>
        <input type="text" name="ContactName" placeholder="email.."/><br/><br/>
        <input type="text" name="Country" placeholder="country.."/><br/><br/><br/>
        <input type="submit" name="submit" value="Add"/>
    </form>
</body>
</html>
<?php
$customerName=$_POST["CustomerName"];
$contactName=$_POST["ContactName"];
$country=$_POST["Country"];
require("connect.php");

$sql = "INSERT INTO costumer (CustomerName, ContactName,Country)
VALUES ('$customerName','$contactName',' $country')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>