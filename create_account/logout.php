<?php

session_start();
$_SESSION['customer_login'] = false;

header('location:../index.php');

?>