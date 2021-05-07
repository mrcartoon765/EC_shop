<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();
$delete_name = isset($_POST['delete_name'])? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';
session_start();
if($delete_name != '') unset($_SESSION['products'][$delete_name]);
$total = 0;
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
foreach($products as $product_title => $cart_in_product){
  $subtotal = (int)$cart_in_product['product_price']*(int)$cart_in_product['product_count'];
  $total += $subtotal;
}
if($customer_login == true){
  $total = intval($total*0.7);
}
$_SESSION['total_price'] = $total;
$context['product_cart'] = $products;
$context['total'] = $total;

template_twig_files::template_load_front();