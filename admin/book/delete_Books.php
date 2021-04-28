<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];
require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

$Book_id = isset($_POST['book_id'])? htmlspecialchars($_POST['book_id'], ENT_QUOTES, 'utf-8'):'';

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}
$stmt = $dbh->prepare("DELETE FROM Book WHERE book_id=:id");
$stmt->bindParam(":id",$Book_id);
$stmt->execute();

header('location:' . Bootstrap::ENTRY_URL .'/Books.php');