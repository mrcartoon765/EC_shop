<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

($_POST['login_pay'] == 1)?
$context['login_pay'] = 1:'';

template_twig_files::Prepare_the_template();

template_twig_files::template_load_front();