<?php

namespace config;

use config\template_twig_files;
use config\original_Mysql_command;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

$id = $_POST['customer_id'];

original_Mysql_command::user_data_update('customer',$id);

header("location:" . Bootstrap::ENTRY_URL . "/users.php");