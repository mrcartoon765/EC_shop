<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];
require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

$id = isset($_POST['id'])? htmlspecialchars($_POST['id'], ENT_QUOTES, 'utf-8'):'';

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}
$stmt = $dbh->prepare("DELETE FROM news WHERE id=:id");
$stmt->bindParam(":id",$id);
$stmt->execute();

header('location:' . Bootstrap::ENTRY_URL .'/news.php');