<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //indexed array
    $colors=["red","green","blue"];
    echo $colors[0];
    echo "<br>";
    echo $colors[1];
    echo "<br>";
    echo $colors[2];
    echo "<br>";
    ?>
    <hr>
    <?php 
    // associative array
    $student=[
        "name" => "Batool Ali",
        "age"  => 29,
    ];
    echo $student["name"];
    echo "<br>";
    echo $student["age"];
    ?>
    <hr>
    <?php
    // multi-dimensional array
    $products=[
        ["product #1", 50],
        ["product #2", 150],
        ["product #3", 350],
    ];
    echo $products[0];
    echo "<br>";
    echo $products[0][0];
    echo "<br>";
    echo $products[0][1];
    echo "<br>";
    ?>
    <hr>
    <?php
    var_dump($products); 
    echo "<hr>";
    echo "<pre>";
    print_r($products);
    echo "</pre>";
    ?>
</body>
</html>