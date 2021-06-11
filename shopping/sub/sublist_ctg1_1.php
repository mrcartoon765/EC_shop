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

$ctg_id=mb_substr($GLOBALS['filename'],-1);

$ctg = mb_substr($GLOBALS['filename'],-6,4);

$ctg_data = database::get_data_where('sub',$ctg,$ctg_id);

$ctg_name = database::get_data_where($ctg,'id',$ctg_id);

//ページングを表示させるためのダミー処理
original_Mysql_command::search_data_and_paging('book','id');

$context['this_dir'] = $this_dir;

include_once(AppDir.'/common/paging_context.php');

$context['product_data'] = $ctg_data;
$context['ctg_title'] = $ctg_name[0]['name'];
template_twig_files::template_load_front();