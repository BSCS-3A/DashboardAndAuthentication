<?php

// $sname= "localhost";
// $unmae= "root";
// $password = "";

// $db_name = "buceils";

// $conn = mysqli_connect($sname, $unmae, $password, $db_name);


$dbhost = "localhost";
$dbuser = "id16218880_webhostingbscs3a";
$dbpass = "t9%~bjqmK)uHAwe[";
$db = "id16218880_buceils";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
	echo "Connection failed!";
}