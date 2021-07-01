<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

database::data_get('book');

database::get_detail_data('sub',$_GET['id']);
$sub = $detail_data;
$book_ctg_id = array_column($DB_DATA_GET,'title');

$context['book_ctg'] = $book_ctg_id;

$ctg_id = $detail_data['ctg_id'];
$ctg1_id = $detail_data['ctg1'];
$ctg2_id = $detail_data['ctg2'];

$ctg_id = database::get_detail_data('ctg_id',$ctg_id)['name'];
$ctg1_id = database::get_detail_data('ctg1',$ctg1_id)['name'];
$ctg2_id = database::get_detail_data('ctg2',$ctg2_id)['name'];

$context['sub'] = $sub;
$context['sent_id'] =$_GET['id'];
$context['ctg_id'] = $ctg_id;
$context['ctg1_id'] = $ctg1_id;
$context['ctg2_id'] = $ctg2_id;

template_twig_files::template_load_front();