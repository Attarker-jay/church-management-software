<?php 
session_start();
 unset($_SESSION['password']);
 unset($_SESSION['username']);
 unset($_SESSION['logged_in']);
 session_destroy();
 header("location: ../../../login.php");
?>