<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";


$email = POST_GET::GET('$email','email');
$password = POST_GET::GET('$password','password');

$dbh = database::dbh();

$stmt = $dbh->prepare("SELECT * FROM admin");
$stmt->execute();

$pass = $stmt->fetch();

if($email ==''|$password==''){
    header('location:./index.php');
}

if(password_verify($email,$pass['mail'])) {
if(password_verify($password,$pass['password'])) {
  session_start();
session_regenerate_id(true);
  $_SESSION["admin_login"] = true;
  header("Location:" . Bootstrap::APP_URL . "admin/dashboard.php");
}else{
    header( "refresh:3;url=./index.php" );
    echo 'パスワードが違います。';
}
}else{
    header( "refresh:3;url=./index.php" );
    echo 'メールアドレスが違います。';
}