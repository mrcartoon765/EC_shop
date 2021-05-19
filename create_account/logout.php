<?php

session_start();
session_regenerate_id(true);
$_SESSION[] = false;
$_SESSION['customer_no'] = null;
$_SESSION['customer_login'] = false;
$_SESSION['customer_id'] = null;
$_SESSION['customer_family_name'] = null;
$_SESSION['customer_first_name'] = null;

header('location:../index.php');

?>