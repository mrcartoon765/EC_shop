<?php

namespace config;
use config\admin_login;
use config\template_twig_files;


$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

original_Mysql_command::search_data_and_paging('sub','title',30);
database::db_delete('sub');

$context['product_data'] = $search;
$context['title'] = $title;

$context['this_dir'] = $this_dir;
$context['pages'] = $pages;
$context['prev'] =  $prev;
$context['page'] =  $page;
$context['next'] =  $next;

template_twig_files::template_load_front();