<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

$nums = POST_GET::GET($nums,'num');
$id = POST_GET::GET($id,'id');
$order_id = POST_GET::GET($order_id,'order_id');
if($id==''||$num=''){
  header('location: ./order_products.php?id='.$order_id);
}

database::data_num_update('order_products','num',$nums,'id',$id);

header('location:./order_products.php?id='.$order_id);