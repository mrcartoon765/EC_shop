<?php

namespace config;

use config\template_twig_files;
use config\original_Mysql_command;

use mysqli;
use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

// template_twig_files::Prepare_the_template();

    admin_login::login_session();

    original_Mysql_command::POST_DATA_INSERT('sub');