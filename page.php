<?php

namespace config;

$this_dir = basename(__DIR__);

$this_dir === "ec_shop2" ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);


$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);