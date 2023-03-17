<?php
session_start();
$_SESSION['u_id']=NULL;
unset($_SESSION['u_id']);
header("location:a_login.php");
?>
