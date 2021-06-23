<?php

session_start();
session_regenerate_id(true);
$_SESSION = [];

header('location:../index.php');

?>