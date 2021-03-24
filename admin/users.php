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

$first_name = isset($_GET['first_name'])? htmlspecialchars($_GET['first_name'], ENT_QUOTES, 'utf-8'):'';

try{
  $dbh = new \PDO("mysql:host=mysql;dbname=BOOK_EC","root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

if($first_name == '')
{
    $stmt = $dbh->prepare("SELECT * FROM customer");

}else{
    // $stmt = $dbh->prepare("SELECT * FROM customer WHERE first_name=:first_name");
    // $stmt->bindParam(":first_name",$first_name);
    $stmt = $dbh->prepare("SELECT * FROM customer WHERE first_name like :first_name");
    $stmt->bindValue(":first_name",'%'.$first_name.'%');
 }

$stmt->execute();
$customer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

($customer['dm']===1)?
  $customer['dm'] = '受信する':
  $customer['dm'] = '-';

$context['customer']=$customer;
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);