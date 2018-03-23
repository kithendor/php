<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "fasi";

$dbcon = new mysqli($server, $user, $pass, $db);

if($dbcon->connect_error)
{
	die("Error: ".$dbcon->connect_error);
}

if(!$_POST)
{
	die("geia xara!!");
}

$usern = $_POST['usertxt'];
$passw = $_POST['passtxt'];

$select = "SELECT * FROM xiousers WHERE usern = '$usern' AND passw = '$passw'";

$result = $dbcon->query($select);

$row = $result->fetch_assoc();

if($row['id'])
{
	echo $row['id']." ".$row['name'] ;
}
else
{
	echo "poulo";
}




?>