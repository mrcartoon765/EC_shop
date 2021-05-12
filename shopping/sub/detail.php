<?php
namespace config;

use shopping;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();

database::get_detail_data('sub',$_GET['id']);
database::data_get('sub');

want::want_button();
$product_data = $detail_data[0];
$context['value'] = $product_data;
$context['this_dir'] = $this_dir;
template_twig_files::template_load_front();