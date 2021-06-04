<?php
namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

$Want_status = want::getWantStatus($_SESSION['customer_id'],$_POST['table_name'],$_POST['product_id']);

if($_SESSION['customer_id'] === $Want_status['customer_id']){
  $want  = 'active';
  $icon = '<i class="fa-heart fa-2x px-16 fas">';
}else{
  $want = '';
  $icon = '<i class="fa-heart fa-2x px-16 far">';
}

$sum = want::getWant($_POST['table_name'],$_POST['product_id']);

$want_status = [
'want' => $want,
"icon" => $icon,
'sum'  => $sum,
'post' => $_POST
];
echo json_encode($want_status);
exit;