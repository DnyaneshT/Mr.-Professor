<?php

$db_name = "minip";
$user = "root";
$pass = "";
$server_name = "localhost";

$con=mysqli_connect($server_name,$user,$pass,$db_name);

if(!$con)
{
	die("Connection error".mysql_connect_error());
}


?>