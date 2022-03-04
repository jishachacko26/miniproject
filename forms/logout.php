<?php
session_start();
session_destroy();
unset($_SESSION["l_id"]);

header("Location:../../../../colorlib-regform-1/Login_v4/KLogin.php");
?>