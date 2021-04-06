<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

session_start();

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$id = isset($_POST['id'])? htmlspecialchars($_POST['id'], ENT_QUOTES, 'utf-8'):'';
$title = isset($_POST['title'])? htmlspecialchars($_POST['title'], ENT_QUOTES, 'utf-8'):'';
$content = isset($_POST['content'])? htmlspecialchars($_POST['content'], ENT_QUOTES, 'utf-8'):'';
$content = strip_tags(nl2br($content));

try{
    $dbh = new \PDO($DB_CORPORATION,"root","root");
}catch(\PDOException $e){
    var_dump($e->getMessage());
    exit;
}

$stmt = $dbh->prepare("UPDATE news SET title=:title, content=:content, updated_at=now() WHERE id=:id");
$stmt->bindParam(":title",$title);
$stmt->bindParam(":content",$content);
$stmt->bindParam(":id",$id);
$stmt->execute();

header("location:" . Bootstrap::ENTRY_URL . "/news.php");