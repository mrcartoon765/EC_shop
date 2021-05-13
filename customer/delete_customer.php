<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

customer_login::login_session();

template_twig_files::Prepare_the_template();

($_SESSION['delete_false'])?
  $context['miss'] = 'ユーザー情報が一致しません':
  $context['miss'] = '';

  unset($_SESSION['delete_false']);
template_twig_files::template_load_front();