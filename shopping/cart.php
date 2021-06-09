<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

shopping_cart::cart_session();

shopping_cart::want_list_cart();

$delete_name = POST_GET::GET($delete_name, 'delete_name');

$product_count = POST_GET::GET($product_count, 'product_count');

$cart_in_title = POST_GET::GET($cart_in_title, 'cart_in_title');

if ($product_count != null) {
    $_SESSION['products'][$cart_in_title]['product_count'] = $product_count;
}

$products = shopping_cart::cart_product_sum();
$total = shopping_cart::cart_price_sum();

shopping_cart::cart_status_check();

shopping_cart::cart_empty();

$_SESSION['total_price'] = $total;
$context['product_cart'] = $products;
$context['total'] = $total;
template_twig_files::template_load_front();