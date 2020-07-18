<?php

$link= mysqli_connect('localhost','Rifat','','VS_CODE_TEST');
if($link== false)
{
    die("Error:could not connect." .mysqli_connect_error());
}

$sql - "INSERT INTO test_table(id,username,password)Values
('1','Demo','demo')";
    if(mysqli_queery($link,$sql)){
        echo "values inserted";
    }
    else{
        echo "Error:Could not able to create table." .mysqli_error($link);
    }
    mysqli_close($link)
    ?>