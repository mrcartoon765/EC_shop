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

$Book_id = isset($_POST['book_id'])? htmlspecialchars($_POST['book_id'], ENT_QUOTES, 'utf-8'):'';

try{
  $dbh = new \PDO("mysql:host=mysql;dbname=BOOK_EC","root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}
$stmt = $dbh->prepare("DELETE FROM Book WHERE book_id=:id");
$stmt->bindParam(":id",$Book_id);
$stmt->execute();

header('location:' . Bootstrap::ENTRY_URL .'/Books.php');