<?php

namespace config;
use config\admin_login;
use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

database::data_get('book');

$context['books'] = $DB_DATA_GET;

template_twig_files::template_load_front();