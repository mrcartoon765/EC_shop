<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

shopping_cart::cart_session();

$delete_name = POST_GET::GET($delete_name,'delete_name');

$product_count = POST_GET::GET($product_count,'product_count');

$cart_in_title = POST_GET::GET($cart_in_title,'cart_in_title');

if($product_count != null){
  $_SESSION['products'][$cart_in_title]['product_count'] = $product_count;
}

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
$context['title'] = (string) $_POST['products'];


if($_POST["cart_in_status"] == 1){
$_POST["cart_in_status"] = 0;
header('Location:'.$_SERVER['HTTP_REFERER']);
}

if($_POST["cart_null"] == 1){
  unset($_SESSION['products']);
  unset($_SESSION['total_price']);
  $_POST["cart_null"] = 0;
  header('Location:./cart.php');
}

template_twig_files::template_load_front();