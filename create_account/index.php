<?php

namespace config;

$this_dir = basename(__DIR__);
require_once dirname(__DIR__) . '/config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (isset($_SESSION['MAIL'])) {
  echo 'ようこそ' . h($_SESSION['MAIL']) . "さん<br>";
  echo "<a href= logout.php>ログアウト</a>";
  exit;
}

$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
