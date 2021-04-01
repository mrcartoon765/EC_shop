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

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$id = isset($_GET['id'])? htmlspecialchars($_GET['id'],ENT_QUOTES, 'utf-8'):'';

if($id==''){
  header('location: ./orders.php');
}

try{
  $dbh = new \PDO("mysql:host=mysql;dbname=BOOK_EC","root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

// $sql = "SELECT order_status FROM order_data WHERE id";

// $res =$dbh->query($sql);

// $status = $res->fetchAll(\PDO::FETCH_BOTH);

// foreach ($res as $status){
//   $s =  $status['order_status'];
// }

// echo '<pre>';
// var_dump($status);
// echo '<pre>';

// if ($dbh->query($sql)) {
//   # code...
// }
$stmt = $dbh->prepare("UPDATE order_data SET order_status = 1 WHERE id=:id");
$stmt->bindParam(":id",$id);
$stmt->execute();

header('location:./orders.php');

$order_products = $stmt2->fetchAll(\PDO::FETCH_ASSOC);

var_dump($order_data);

$context['header'] = include Bootstrap::ADMIN_HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);