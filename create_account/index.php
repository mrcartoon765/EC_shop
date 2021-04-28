<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($document_root."/templates");
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (isset($_SESSION['mail'])) {
  echo 'ようこそ' . h($_SESSION['mail']) . "さん<br>";
  echo "<a href= logout.php>ログアウト</a>";
  exit;
}

$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
