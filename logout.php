<?php
session_start();
unset($_SESSION['sid']);
header('location:user_login.php');
?>