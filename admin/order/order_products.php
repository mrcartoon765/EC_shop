<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


admin_login::login_session();

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

$stmt1 = $dbh->prepare("SELECT * FROM order_data WHERE id=:id");
$stmt1->bindParam(':id',$id);
$stmt1->execute();
$order_data = $stmt1->fetchAll(\PDO::FETCH_ASSOC);

$stmt2 = $dbh->prepare("SELECT * FROM order_products WHERE order_id=:id");
$stmt2->bindParam(':id',$id);
$stmt2->execute();
$order_products = $stmt2->fetchAll(\PDO::FETCH_ASSOC);

$context['orders'] = $order_data[0];
$context['order_detail'] = $order_products;

template_twig_files::template_load_front();