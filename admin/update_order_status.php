<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($document_root."/templates");

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

session_start();

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$id = isset($_GET['id'])? htmlspecialchars($_GET['id'],ENT_QUOTES, 'utf-8'):'';

if($id==''){
  header('location: ./orders.php');
}

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$sql = ("SELECT id, order_status FROM order_data WHERE id = $id")
;

$res =$dbh->query($sql);

$id_status = $res->fetchAll(\PDO::FETCH_BOTH);

$order_status = (INT)$id_status[0]['order_status'];

if($order_status === 0){
$stmt = $dbh->prepare("UPDATE order_data SET order_status = 1 WHERE id=:id");
}else{
$stmt = $dbh->prepare("UPDATE order_data SET order_status = 0 WHERE id=:id"); 
}
$stmt->bindParam(":id",$id);
$stmt->execute();

header('location:./orders.php');

$context['header'] = include Bootstrap::ADMIN_HEADER_FILE;
$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);