<?php

    require("connect.php");

    echo "<div style='display:flex; justify-content:space-evenly'>";
    echo "<h1>Employees Details</h1>";
    echo "<a href='create.php' style='width:15%;text-decoration:none'> <p style='background-color:green;color:white;border-radius:10px;     text-align:center;height:40px;padding:9% 2% 0 2%;font-size:20px'>+ Add New Employee</p></a>";
    echo "</div>";


    $stmt = $conn->prepare("SELECT id, userName, addresses, salary, deleteFlag FROM employees");
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "<table border=2 style='margin:0 auto; width:60%; text-align:center'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>User Name</th>";
        echo "<th>Address</th>";
        echo "<th>Salary</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        $row = $stmt->fetchAll();
        // echo "<pre>";
        // print_r ($row);
        $i=0;
        foreach ($row as $key){
            if($key['deleteFlag']==0){
                echo "<tr>";
                echo "<td>". ++$i ."</td>";
                echo "<td>". $key['userName'] ."</td>";
                echo "<td>". $key['addresses']."</td>";
                echo "<td>". $key['salary']."</td>";
                echo "<td><a href='update.php?id=".$key['id']."'>edit</a>&nbsp;&nbsp;
                <a href='delete.php?id=".$key['id']."'>delete</a></td>";
            }
        }
        echo "</table>";
    }else{
        echo "no data";
    }
  // set the resulting array to associative
//   

//   foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//     echo $v;
?>