<?php 

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

use config\Bootstrap;
use config\template;

template_twig_files::Prepare_the_template();

header( "refresh:3;url=".Bootstrap::APP_URL );

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);