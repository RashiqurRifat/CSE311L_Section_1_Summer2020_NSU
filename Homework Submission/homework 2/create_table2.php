<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE employee
(
 Employee_Id int(6) NOT NULL,
 First_Name varchar(20),
 Last_Name varchar(25) NOT NULL,
 Email varchar(25) NOT NULL,
 Phone_Number varchar(15),
 Hire_Date date NOT NULL,
 JOB_ID varchar(10) NOT NULL,
 Salary int(8),
 Commisssion_pct int(2),
 Manager_id int(6),
 Department_Id int(4),
 PRIMARY KEY(Employee_Id)  
    )";
      "DESC employee";   

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
