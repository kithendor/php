<?php
session_start();
if(!$_SESSION['onomataki'])
{
	die("den exeis prosvasi");
}
echo "edw einai to praama ".$_SESSION['onomataki'];
echo "<a href='lokout.php'>lokout</a>";

?>