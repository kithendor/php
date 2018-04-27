<?php

include("connection.php");

if(!$_POST)
{
	die("geia xara!");
}

$name = $_POST['nametxt'];
$age = $_POST['agetxt'];
$uname = $_POST['user'];
$pass = $_POST['pass'];

/*
$ins = "INSERT INTO fiouzers (fname, age, usname, passw) VALUES ('$name','$age','$uname','$pass')";


*/


$stmt = $con->prepare('INSERT INTO fiouzers (fname, age, usname, passw) VALUES (?,?,?,?)');
$stmt->bind_param('ssss',$name,$age,$uname,md5($pass)); 


if($stmt->execute())
{
	echo "mou mpike";
}
else
{
	echo "den mou mpike";
}






?>