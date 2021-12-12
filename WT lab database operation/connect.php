<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="studentvit";

//create connection

$connect = new mysqli($servername, $username, $password, $dbname);

//condition to check connection 

if($connect->connect_error)
{
	echo "Connection Failed";
}
else
{
	//echo "Connected Successfully";
}
?>