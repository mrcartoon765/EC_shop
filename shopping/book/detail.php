<?php
namespace config;

use shopping;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

shopping_cart::cart_session();
template_twig_files::Prepare_the_template();
database::data_get('book');

$id =  substr($_SERVER['REQUEST_URI'],-1);
database::get_detail_data('book',$id);
$book = $detail_data;
want::want_button();
$context['value'] = $book;
template_twig_files::template_load_front();