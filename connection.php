<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "efficace_login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed to connect!");
}

