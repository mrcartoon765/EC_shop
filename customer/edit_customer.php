<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

use create_account\master\initMaster;

// var_dump($customer_login);

session_start();

if($customer_login == false){
  header("Location:" . Bootstrap::APP_URL . "/index.php");
  exit;
}
echo "ログインしています";
echo'<br><br><br>';
echo 'ようこそ' . $_SESSION['customer_family_name'] . ' ' . $_SESSION['customer_first_name'] .'さん';
$customer_id = isset($_SESSION['customer_id'])? htmlspecialchars($_SESSION['customer_id'], ENT_QUOTES, 'utf-8'):'';

var_dump($customer_id);

if($customer_id == ''){
  header("Location:" . Bootstrap::APP_URL . "/index.php");
  exit;
}

try{
  $dbh = new \PDO($DB_BOOK_EC,Bootstrap::DB_USER,Bootstrap::DB_PASS);
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}
$stmt = $dbh->prepare("SELECT * FROM customer WHERE id=:id");
$stmt->bindParam(":id",$customer_id);
$stmt->execute();
$customer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($customer);

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();

$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;
$context['customer'] = $customer;
$context['header'] = include Bootstrap::HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
$context['footer'] = include Bootstrap::FOOTER_FILE;