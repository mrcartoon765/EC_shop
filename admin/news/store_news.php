<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

session_start();
session_regenerate_id(true);
session_regenerate_id(true);

if ($_SESSION['admin_login'] == false) {
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$title = isset($_POST['title'])? htmlspecialchars($_POST['title'], ENT_QUOTES, 'utf-8'):'';
$content = isset($_POST['content'])? htmlspecialchars($_POST['content'], ENT_QUOTES, 'utf-8'):'';
$content = strip_tags(nl2br($content));


$dbh = database::dbh();

$stmt = $dbh->prepare("INSERT INTO news(
  title,
  content,
  created_at,
  updated_at
  ) values (
    :title,
    :content,
    now(),
    now()
  )");

  $stmt->bindParam(':title',$title);
  $stmt->bindParam(':content',$content);
  $stmt->execute();

  header('location:' . Bootstrap::ENTRY_URL . "/news.php");