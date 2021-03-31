<?php

namespace config;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir !== "portforio" ?
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php'
: require_once dirname(__FILE__) . '/config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

session_start();

try {
  $pdo = new \PDO(Bootstrap::DB_TYPE.':dbname='. Bootstrap::DB_NAME .';host='. Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS);
  $stmt = $pdo->prepare('SELECT * FROM Customer where mail = ?');
  $stmt->execute([$_POST['mail']]);
  $row = $stmt->fetch(\PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
$err_msg = [];

if (!isset($row['mail'])) {
  echo 'メールアドレスまたはパスワードが間違っています1。';
  echo nl2br("<a href= index.php>再度ログイン</a>");
  return false;
  header('Location:'.Bootstrap::APP_URL.'create_account/login.php');
  header('Location: login.php');
  exit;
}

if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true);
  $_SESSION['MAIL'] = $row['mail'];
  echo "ログインしました\n\n";
} else {
  echo 'パスワードが間違っています。';
  echo "<a href= index.php>再度ログイン</a>";
  return false;
  header('Location: login.php');
  exit;
}

$context['header'] = include Bootstrap::HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
$context['footer'] = include Bootstrap::FOOTER_FILE;