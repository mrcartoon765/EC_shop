<?php

namespace shopping;
require_once dirname(__FILE__) . '/shopping//Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem('Bootstrap::TEMPLATE_DIR');
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);


$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);