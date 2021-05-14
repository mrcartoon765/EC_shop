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

$product_data = $detail_data[0];

$book_id = $product_data['ctg_id'];

database::data_get('book');

$book = $DB_DATA_GET;
$book_data = $book[$book_id];
$context['book_image'] = "shopping/image/book/".$book_data['image'];
want::want_button();
$context['value'] = $product_data;
$context['this_dir'] = $this_dir;
$context['book_data'] = $book_data;
template_twig_files::template_load_front();