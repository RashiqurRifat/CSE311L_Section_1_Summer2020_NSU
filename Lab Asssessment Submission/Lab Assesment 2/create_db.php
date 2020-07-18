<?php

$link= mysqli_connect('localhost','Rifat','');
if($link== false)
{
    die("Error:could not connect." .mysqli_connect_error());
}

$sql= "CREATE DATABASE VS_CODE_TEST";

if(mysqli_query($ink,$sql)){
    echo "DB Created";
}
else{
    echo "Error: could not able to create DB." >mysqli_errr($link);
}

mysqli_close($link)
?>