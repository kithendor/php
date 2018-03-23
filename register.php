<?php

if(!$_POST)
{
	die("geia xara!!");
}

$usern = $_POST['usertxt'];
$passw = $_POST['passtxt'];
$name = $_POST['fnametxt'];
$age = $_POST['agetxt'];


$server = "localhost";
$user = "root";
$pass = "";
$db = "fasi";

$dbcon = new mysqli($server, $user, $pass, $db);

if($dbcon->connect_error)
{
	die("Error: ".$dbcon->connect_error);
}

$insert = "INSERT INTO xiousers(usern, passw, name, age) VALUES ('$usern','$passw','$name',$age)";

if($dbcon->query($insert))
{
	echo "mpike";
}





?>