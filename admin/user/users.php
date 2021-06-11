<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

original_Mysql_command::search_data_and_paging('customer','first_name',20);

if (isset($_GET['mail'])){
  original_Mysql_command::search_data_and_paging('customer','mail',20);
}

$customer = $GLOBALS['search'];

$context['customer']=$customer;
$context['first_name'] = $_GET['first_name'];

include_once(AppDir.'/common/paging_context.php');

template_twig_files::template_load_front();