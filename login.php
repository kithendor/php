<?php
session_start();

include("connection.php");

if(!$_POST)
{
	die("geia xara!");
}

$uname = $_POST['user'];
$pass = $_POST['pass'];

/*
$sel = "SELECT * FROM fiouzers WHERE usname='$uname' AND passw='$pass'";

$result = $con->query($sel);

$row = $result->fetch_assoc();
*/



$stmt = $con->prepare('SELECT fname FROM fiouzers WHERE usname = ? AND passw=?');
$stmt->bind_param('ss', $uname,md5($pass)); 
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


if($row['fname'])
{
	echo "kalimera ".$row['fname']."!!";
	$_SESSION['onomataki'] = $row['fname'];
	echo "<a href='neo.php'>pata edw gia prama</a>";
}
else
{
	echo "lathos kretensials";
}










?>