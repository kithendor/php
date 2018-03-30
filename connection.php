<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "testregister";

$dbcon = new mysqli($server, $user, $pass, $db);

if($dbcon->connect_error)
{
	die("provlima");
}




?>