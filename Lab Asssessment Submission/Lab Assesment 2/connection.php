<?php

$MySQLi_connection = new MySQLi('localhost','rifat','','cse_311');

if($MySQLi_connection->connect_error)
{
    echo "not connected, error:" .$MySQLi_connection->connect_error;
}
else
{
    echo "connected";
}

?>