<?php
namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();

$ctg_id=database::get_detail_data('sub',$_GET['ctg1']);

database::get_ctg_product('ctg1',$ctg_id);

database::get_ctg_name($ctg_id);

$context['product_data'] = $ctg_product_data;
$context['ctg_title'] = $ctg_name;

$context['this_dir'] = $this_dir;
$context['pages'] = $pages;
$context['prev'] =  $prev;
$context['page'] =  $page;
$context['next'] =  $next;
$context['want'] =  $want;
template_twig_files::template_load_front();