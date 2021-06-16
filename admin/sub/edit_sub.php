<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

database::data_get('Book');

database::get_detail_data('sub',$_GET['id']);

$Book_ctg_id = array_column($DB_DATA_GET,'title');

$context['Book_ctg'] = $Book_ctg_id;

$context['sub'] = $detail_data;
$context['sent_id'] =$_GET['id'];

template_twig_files::template_load_front();