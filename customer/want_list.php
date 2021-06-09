<?php
namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;
use config\want;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

customer_login::login_session();

template_twig_files::Prepare_the_template();

$want_list  = want::get_db_want_products();

want::want_list_delete();

$context['product_data'] = $want_list;
$context['title'] = $title;
$context['this_dir'] = $this_dir;
$context['image_directory'] = 'shopping/image/'.$want_list['table_name'].'/';
$img = AppUrl.'//shopping/image/';
$context['img'] = $img;


template_twig_files::template_load_front();