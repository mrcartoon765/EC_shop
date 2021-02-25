<?php

namespace config;
$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/../config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

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
  $err_msg[] = 'メールアドレスまたはパスワードが間違っています1。';
  echo $err_msg[0];
  echo nl2br("<a href= index.php>再度ログイン</a>");
  return false;
  header('Location:'.Bootstrap::APP_URL.'/create_account/login.php');
}
}

if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true);
  $_SESSION['MAIL'] = $row['mail'];
  echo "ログインしました\n\n";
} else {
  $err_msg[]= 'メールアドレスまたはパスワードが間違っています2。';
  header('Location: login.php');
  echo $err_msg[2];
  echo "<a href= index.php>再度ログイン</a>";
  return false;
}

$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);

