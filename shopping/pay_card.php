<?php

namespace config;

use config\template_twig_files;

use shopping\lib\book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

template_twig_files::Prepare_the_template();

shopping_cart::cart_session();

session_regenerate_id(true);

POST_GET::array_escape();

$context['family_name']=$family_name;
$context['first_name']=$first_name;
$context['mail']=$mail;
$context['tel1']=$tel1;
$context['tel2']=$tel2;
$context['tel3']=$tel3;
$context['zip1']=$zip1;
$context['zip2']=$zip2;
$context['address']=$address;

template_twig_files::template_load_front();