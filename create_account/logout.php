<?php

session_start();
$_SESSION['customer_login'] = false;
$_SESSION['customer_id'] = null;
$_SESSION['customer_first_name'] = null;

header('location:../index.php');

?>