<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE LOCATION_TABLE
(
    Location_id int(4) NOT NULL,
    Street_Address varchar(40),
    Postal_Code varchar(12),
    City varchar(30)NOT NULL,
    State_Province varchar(25),
    Country_ID varchar(2),
    PRIMARY KEY(Location_id)
    )";
    
    "DESC LOCATION_TABLE";

if (mysqli_query($link,$sql))
 {
  echo "Table Created";
 }
  else
  {
    echo "Error : Could not able to create Table." .mysqli_error($link);
  }
  mysqli_close($link)
 
 ?>