<?php

namespace config;
$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/../config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

session_start();
$output = '';
if (isset($_SESSION["MAIL"])) {
  $output = 'ログアウトしました。';
} else {
  $output = 'セッションがタイムアウトしました。';
}

$_SESSION = array();

if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
);
}
@session_destroy();

echo $output;

$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);