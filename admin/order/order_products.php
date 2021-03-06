<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

$id = $_GET['id'];

if($id==''){
  header('location: ./orders.php');
}else{}

$dbh = database::dbh();

$order_data = database::get_detail_data('orders',$id);

$order_products = database::get_data_where('order_products','order_id',$id);

database::data_get('book');

$book_title = $DB_DATA_GET;

if ($order_data['customer_id'] != 'not member') {
  $customer_id = $order_data['customer_id'];
  $customer = database::get_data_where('customer','id',$customer_id);
  $customer_name =$customer[0]["family_name"]." ".$customer[0]['first_name'];
}

echo '<pre>';
var_dump($customer_name);
echo '</pre>';


$context['orders'] = $order_data;
$context['order_detail'] = $order_products;
$context['book_title'] = $book_title;
$context['small_sum'] = $order_products['num']*$order_products['price'];

template_twig_files::template_load_front();