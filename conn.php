<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "dish";

    $conn = mysqli_connect($host,$user,$password,$database);

    if(!$conn){
        die("Unable to connect with database");
    }

?>