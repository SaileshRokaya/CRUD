<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $con = mysqli_connect($dbhost,$dbuser,$dbpass, "testpcps");

    if (!$con){
        die('Connect Error: ' .mysqli_connect_errno());
    }
?> 