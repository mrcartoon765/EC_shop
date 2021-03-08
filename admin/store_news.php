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

if ($_SESSION['admin_login'] == false) {
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$title = isset($_POST['title'])? htmlspecialchars($_POST['title'], ENT_QUOTES, 'utf-8'):'';
$content = isset($_POST['content'])? htmlspecialchars($_POST['content'], ENT_QUOTES, 'utf-8'):'';
$content = nl2br($content);

$stmt = $dbh->prepare("INSERT INTO news(
  title,
  content,
  creater_at,
  updated_at
  ) values(
    :title,
    :content,
    now(),
    now(),
  )");
  $stmt->bindParam(':title',$title);
  $stmt->bindParam(':content',$content);
  $stmt->execute();

  header('location:' . Bootstrap::ENTRY_URL . "/news.php");
$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);