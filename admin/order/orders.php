<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

database::data_get('orders');

original_Mysql_command::search_data_and_paging('orders','id',20);

$order_data = $GLOBALS['search'];

if(isset($_POST['order_delete'])){
  database::delete_where('orders','id',$_POST['order_delete']);
  unset($_POST['order_delete']);
  header("Location: ./orders.php");
}

$context['order_data'] = $order_data;
$context['pages'] = $GLOBALS['pages'];
$context['prev'] =  $GLOBALS['prev'];
$context['page'] =  $GLOBALS['page'];
$context['next'] =  $GLOBALS['next'];

template_twig_files::template_load_front();