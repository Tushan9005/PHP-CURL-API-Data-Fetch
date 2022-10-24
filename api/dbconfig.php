<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "crud";

$con = new mysqli($server,$username,$password,$database,3308);

if($con->connect_error) {
	die("Connection failed : " . $con->connect_error);
}


?>