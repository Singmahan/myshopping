<?php

    include('connectdb.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $sql="SELECT*FROM member_db";
        $result=mysqli_query($dbcon, $sql);
        while($row=mysqli_fetch_array($result)){

            echo "id = ".$row[0]."<br>";
            echo "fname-lname = ".$row[1]." ".$row[2];

        }
    ?>
</body>
</html>