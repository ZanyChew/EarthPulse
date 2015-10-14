<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "earthpulse";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->errno) {
	echo "Unable to connect to the database: <br />".$mysqli->error;
	exit();
}
?>