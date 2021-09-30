<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "test";

    $con = mysqli_connect($server,$user,$password,$db);

    if(!$con) {
        die("Connection to this database failed due to".mysqli_connect_error());
   }
?>