<?php

namespace config;

use shopping\lib\Book;

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

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$stmt = $dbh->prepare("SELECT * FROM customer");
$stmt->execute();
$customers = $stmt->fetchAll(\PDO::FETCH_ASSOC);

$fp = fopen(Bootstrap::APP_DIR . '/admin/customers.csv','w');

// BOMあり
fwrite($fp, "\xEF\xBB\xBF");

$header = ['ID','メールアドレス','パスワード'];
fputcsv($fp,$header);

foreach($customers as $customer){
    fputcsv($fp,$customer);
}

fclose($fp);

header("Location:" . Bootstrap::ENTRY_URL . "/customers.csv");