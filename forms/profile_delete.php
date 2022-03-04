<?php
require('userconnection.php');
$id=$_REQUEST['rid'];
$query = "DELETE FROM register WHERE rid=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: profile1.php"); 
?>