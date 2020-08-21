<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "INSERT INTO jobs_data
VALUES
('AD_PRES','PRESIDENT',20000,40000),
('AD_VP','ADMINISTRATION VICE PRESIDENT',15000,30000),
('AD_ASST','ADMINISTRATION ASSISTANT',3000,6000),
('AC_MGR','ACCOUNTING MANAGER',8200,16000),
('AC_ACCOUNT','PUBLIC ACCOUNTANT',4200,9000),
('SA_MAN','SALES MANAGER',10000,20000),
('SA_REP','SALES REPRESNTIVE',6000,12000),
('ST_MAN','STOCK MANAGER',5500,8500),
('SA_CLERK','STOCK CLERK',2000,5000),
('IT_PROG','PROGRAMER',4000,10000),
('MK_MAN','MARKETING MANAGER',9000,15000),
('MK_REP','MARKETING REPRESENTATIVE',4000,9000)";
if (mysqli_query($link,$sql))
{
 echo "VALUES INSERTED";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>

