<?php
    $servername ="localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "ds_db";
    $conn = mysqli_connect($servername, $db_username, $db_password,$db_name);
    if(!$conn){
        die("conn fail".mysqli_connect_error());
    }