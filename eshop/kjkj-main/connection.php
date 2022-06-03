<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shop_db";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('connection failed');

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
