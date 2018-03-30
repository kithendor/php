<!DOCTYPE html>
<html>
<head>
	<title>retsister</title>
</head>
<body>
	<form action="register.php" method="POST">
		Name: <input type="text" name="nametxt"><br>
		lname: <input type="text" name="lnametxt"><br>
		phone: <input type="number" name="phonetxt"><br>
		E mail:<input type="text" name="mailtxt"><br>
		<input type="submit" value="valton mou">
	</form>

</body>
</html>




<?php

// $server = "localhost";
// $user = "root";
// $pass = "";
// $db = "testregister";

// $dbcon = new mysqli($server, $user, $pass, $db);

// if($dbcon->connect_error)
// {
// 	die("provlima");
// }

include ("connection.php");

if($_POST)
{
	$name = $_POST['nametxt'];
	$fname = $_POST['lnametxt'];
	$phone = $_POST['phonetxt'];
	$mail = $_POST['mailtxt'];
	
	$insert = "INSERT INTO pinaka(name, lastname,phone,email) VALUES ('$name','$fname','$phone','$mail')";

	if($dbcon->query($insert))
	{
		echo "mpike";
	}
}





?>