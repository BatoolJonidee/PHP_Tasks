<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="position">Enter the position</label><br>
        <input type="text" name="position"><br> 
        <label for="value">Enter the value</label><br>
        <input type="text" name="value"><br>
        <input type="submit" name="Add"><br>
    </form>
    <?php
        $pos=$_POST['position'];
        $val=$_POST['value'];
        $arr=array(1,2,3,4,5);
        array_splice($arr,$pos,0,$val);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    ?>
</body>
</html>