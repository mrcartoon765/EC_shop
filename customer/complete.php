<?php 

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

use config\Bootstrap;
use config\template;

$loader = new \Twig_Loader_Filesystem($document_root."/templates");
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

header( "refresh:3;url=".Bootstrap::APP_URL );

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);