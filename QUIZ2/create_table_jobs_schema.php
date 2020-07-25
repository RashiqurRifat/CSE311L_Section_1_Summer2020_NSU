<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE jobs_schema(
    JOB_ID VARCHAR(10) NOT NULL,
    JOB_TITLE VARCHAR(35) NOT NULL,
    MIN_SALARY NUMBER(6),
    MAX_SALARY NUMBER(6))";
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