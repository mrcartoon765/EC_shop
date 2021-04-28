<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

session_start();
$_SESSION['admin_login'] = false;

header('location:'. Bootstrap::APP_URL . "/admin/index.php");