<?php 

$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/../config/Bootstrap.class.php';
use config\Bootstrap;

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

$context[] = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);