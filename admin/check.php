<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$email = isset($_POST['email'])? htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8') : '';
$password = isset($_POST['password'])? htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf-8'): '';

if ($email == '') {
  header("Location:" . Bootstrap::APP_URL . "admin/index.php");
    exit;
}
if ($password == '') {
  header("Location:" . Bootstrap::APP_URL . "admin/index.php");
    exit;
}

if ($email=='admin@admin.com'&&$password=='password01') {
  session_start();
  $_SESSION["admin_login"] = true;
  header("Location:" . Bootstrap::APP_URL . "admin/dashboard.php");
} else {
  header("Location:". Bootstrap::APP_URL . "admin/index.php");
exit;
}