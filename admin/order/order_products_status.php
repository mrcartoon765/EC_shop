<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

POST_GET::array_escape();

if($id==''||$num=''){
  header('location: ./order_products.php?id='.$order_id);
}

database::data_num_update('order_products','num',$nums,'id',$id);

header('location:./order_products.php?id='.$order_id);