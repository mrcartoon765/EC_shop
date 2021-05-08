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

database::data_get('sub');

original_Mysql_command::search_data_and_paging('sub','title');

$context['product_data'] = $GLOBALS['search'];

$sub = $GLOBALS['search'];

$context['customer']=$sub;
$context['title'] = $_GET['title'];
$context['pages'] = $GLOBALS['pages'];
$context['prev'] =  $GLOBALS['prev'];
$context['page'] =  $GLOBALS['page'];
$context['next'] =  $GLOBALS['next'];

template_twig_files::template_load_front();