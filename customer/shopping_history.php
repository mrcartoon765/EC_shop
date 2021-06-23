<?php

namespace config;

use config\database as ConfigDatabase;
use config\template_twig_files;

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

$orders = ConfigDatabase::get_data_where('orders', 'customer_id', $_SESSION['customer_id']);

if($orders){
foreach ($orders as $key => $value) {
    $id[$key] = $value['created_at'];
}
array_multisort($id, SORT_DESC, $orders);
}else{
    $context['no_history'] = "現在購入履歴はありません";
}


$context['history'] = $orders;
$context['history_detail'] = $o;

template_twig_files::template_load_front();
