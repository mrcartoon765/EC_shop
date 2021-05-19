<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

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
session_regenerate_id(true);
  $_SESSION["admin_login"] = true;
  header("Location:" . Bootstrap::APP_URL . "admin/dashboard.php");
} else {
  header("Location:". Bootstrap::APP_URL . "admin/index.php");
exit;
}