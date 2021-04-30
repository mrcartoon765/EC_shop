<?php

namespace config;

use config\template_twig_files;

use Contact\lib\error_check;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


$name = isset($_POST['name'])?
  htmlspecialchars($_POST['name'],ENT_QUOTES, 'utf-8')
  :'';

$email = isset($_POST['email'])?
  htmlspecialchars($_POST['email'],ENT_QUOTES, 'utf-8')
  :'';
$text = isset($_POST['text'])?
  htmlspecialchars($_POST['text'],ENT_QUOTES, 'utf-8')
  :'';

  $context['name'] = $name;
  $context['email'] = $email;
  $context['text'] = $text;

  
template_twig_files::template_load_front();
  