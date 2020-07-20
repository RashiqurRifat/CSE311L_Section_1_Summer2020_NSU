<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Departments( 
    Department_id int(4),
    Department_Name varchar(20)NOT NULL,
    Manager_id int(6),
    Loaction_id int(4) NOT NULL,
    PRIMARY KEY(Department_id))";
 
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



