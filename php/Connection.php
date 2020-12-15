<?php
    $servername = "remotemysql.com";
    $username = "MK2DS7ujfG";
    $password = "Q18x4oORYg";
    $database = "MK2DS7ujfG";
    $port = "3306";
    $con=mysqli_connect($servername, $username, $password, $database);

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>