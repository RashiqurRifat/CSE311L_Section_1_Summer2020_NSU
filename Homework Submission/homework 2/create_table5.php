<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Employees
(
    EMPLOYEE_ID int(6) NOT NULL,
    FIRST_NAME varchar(20),
    LAST_NAME varchar(25)NOT NULL,
    EMAIL varchar(25)NOT NULL,
    PHONE_NUMBER varchar(15),
    HIRE_DATE date NOT NULL,
    JOB_ID varchar(10) NOT NULL,
    SALARY int(8),
    COMMISSION_PCT int(2),
    MANAGER_ID int(6),
    DEPARTMENT_ID int(4),
    PRIMARY KEY(EMPLOYEE_ID)
    )";

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