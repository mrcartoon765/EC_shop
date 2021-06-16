<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

original_Mysql_command::POST_DATA_UPDATE('Book');

database::dbh();

// header("location:" . Bootstrap::ENTRY_URL . "/Books.php");