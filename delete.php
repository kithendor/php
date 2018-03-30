<?php

include ("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>retsister</title>
</head>
<body>
	<form action="delete.php" method="POST">
		Id: <input type="number" name="idtxt"><br>
		<input type="submit" value="vgalton mou">
	</form>

</body>
</html>


<?php
if($_POST)
{
	$kota = $_POST['idtxt'];
	$delete = "DELETE FROM pinaka WHERE id = $kota";
	$dbcon->query($delete);
}



?>