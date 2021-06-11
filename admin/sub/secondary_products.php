<?php

namespace config;
use config\admin_login;
use config\template_twig_files;


$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

original_Mysql_command::search_data_and_paging('sub','title',15);

database::db_delete('sub');

database:: data_get('ctg1');
$ctg1 = $DB_DATA_GET;
database:: data_get('ctg2');
$ctg2 = $DB_DATA_GET;
database:: data_get('ctg_id');
$ctg_id = $DB_DATA_GET;

$context['product_data'] = $search;
$context['title'] = $title;
$context['ctg1_array'] = $ctg1;
$context['ctg2_array'] = $ctg2;
$context['ctg_id_array'] = $ctg_id;

$context['this_dir'] = $this_dir;

include_once(AppDir.'/common/paging_context.php');

template_twig_files::template_load_front();