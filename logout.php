<?php
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="Successfully logged out";
header("location:login.php");
?>
