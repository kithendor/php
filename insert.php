<?php

if(!$_POST)
{
	die("geia xara!!");
}

$fname = $_POST['fnametxt'];
$lname = $_POST['lnametxt'];


$server = "localhost";
$user = "root";
$pass = "";
$db = "fasi";

$dbcon = new mysqli($server, $user, $pass, $db);

if($dbcon->connect_error)
{
	die("Error: ".$dbcon->connect_error);
}

$insert = "INSERT INTO users(onoma, epitheto) VALUES ('$fname','$lname')";

if($dbcon->query($insert))
{
	echo "mpike";
}



header( "Refresh:2; url=insert.html");

?>