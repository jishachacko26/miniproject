<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="kseb";
$cok=false;
$con=new mysqli ($servername,$username,$password,$dbname);
if($con->connect_error){
	die("connection failed:".$con->connect_error);
}
$cok=true;
?>

