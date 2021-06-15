<?php

namespace config;

use config\template_twig_files;

use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

customer_login::login_session();

database::customer_delete($_POST['mail'],$_POST['password'],$_SESSION['customer_id']);
exit;