<?php
namespace config;

use config\template_twig_files;

use shopping\lib\book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;
use config\want;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$want_list_product = database::get_data_where($_POST['want_list_table_name'],'id',$_POST['want_list_product_id']);

$want_list_product[0]['want_list_count_no'] = $_POST['want_list_count_no'];

$want_list_product[0]['want_list_sum'] = database::get_want_list_sum($_POST['want_list_table_name'],$_POST['want_list_product_id']);

//foreachでフロントで繰り返したデータからテーブル名と商品idを取得し返り値としてjsonでデータを返しフロント側で表示させる
echo json_encode($want_list_product[0]);