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

$dbh = database::dbh();

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


template_twig_files::template_load_front();