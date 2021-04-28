<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


admin_login::login_session();

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