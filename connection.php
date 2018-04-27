<?php

$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'fasi';

$con = new mysqli($server, $dbuser,$dbpass,$dbname);

if ($con->connect_error)
{
	die("thema".$con->connect_error);
}





?>