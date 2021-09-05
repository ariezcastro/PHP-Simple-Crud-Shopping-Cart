<?php
session_start();
unset($_SESSION['id_num']);
unset($_SESSION['user_name']);
header("Location: login.php");
?>