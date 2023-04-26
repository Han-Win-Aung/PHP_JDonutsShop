<?php
session_start();
unset($_SESSION['sid']);
header('location:index.php');
?>