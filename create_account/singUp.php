<?php

namespace config;

$this_dir = basename(__DIR__);
require_once dirname(__DIR__) . '/config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

try {
  $pdo = new PDO(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("create table if not exists")
}


$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);

