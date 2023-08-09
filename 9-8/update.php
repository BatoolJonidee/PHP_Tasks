<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<form action='updateDB.php?id=" . ($_GET['id']) . "' method='POST'>
        <label for='usernameup'>Name: </label><br/>
        <input type='text' name='usernameup'/><br/><br/>
        <label for='addressesup'>Address : </label><br/>
        <input type='text' name='addressesup'/><br/><br/>
        <label for='salaryup'>Salary : </label><br/>
        <input type='text' name='salaryup'/><br/><br/><br/>
        <input type='submit' value='Update'/>
    </form>";
    ?>
</body>
</html>