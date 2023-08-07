<?php
$colors = array('white', 'green', 'red');
sort($colors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($colors as $value): ?>
        <li><?php echo $value; ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>