<?php

$link= mysqli_connect('localhost','Rifat','','VS_CODE_TEST');
if($link== false)
{
    die("Error:could not connect." .mysqli_connect_error());
}

$sql - "CREATE TABLE test_table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(225) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    if(mysqli_queery($link,$sql)){
        echo "Table Created";
    }
    else{
        echo "Error:Could not able to create table." .mysqli_error($link);
    }
    mysqli_close($link)
    ?>