<?php
namespace config;

use shopping;
use Symfony\Component\VarDumper\Cloner\Data;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();

database::get_detail_data('sub',$_GET['id']);

database::data_get('sub');

$sub = $DB_DATA_GET;
$product_data = $detail_data;
$Book_id = $product_data['ctg_id'];

$sub_id = database::id_no_random_get($sub,'id');

database::data_get('Book');

$Book = $DB_DATA_GET;
$Book_data = $Book[$Book_id];

$ctg1 = database::Related_Products_Get('sub','ctg1',$detail_data['ctg1']);

$ctg2 = database::Related_Products_Get('sub','ctg2',$detail_data['ctg2']);

$context['Book_detail'] = "";
$context['Book_image'] = "shopping/image/Book/".$Book_data['image'];
$context['value'] = $product_data;
$context['this_dir'] = $this_dir;
$context['Book_data'] = $Book_data;
$context['subdetail'] = "detail.php?id=";
$context['ctg1_product'] = $ctg1;
$context['ctg2_product'] = $ctg2;
$context['image_dir'] = Bootstrap::APP_URL."/shopping/image/sub/";
$context['sub_id'] = $sub_id;
template_twig_files::template_load_front();