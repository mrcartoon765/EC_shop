<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

session_start();

  if($_SESSION['admin_login'] == false){
      header("Location:" . Bootstrap::APP_URL ."/admin/index.php");
      exit;
  }

$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);