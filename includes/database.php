<?php
$db_host = "localhost";
$db_user = "userNew";
$db_pass = "malakies";
$db_name = "cms";


//mysqli_connect()-> needs these parameters to connect to db.
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//mysqli_connect_error()-> Returns the last error message string from the last call to mysqli_connect().
if (mysqli_connect_error()) {
	echo mysqli_connect_error();
	exit;
}