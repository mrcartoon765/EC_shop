<?php
namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();

original_Mysql_command::search_data_and_paging('sub','title',12);

$context['product_data'] = $search;
$context['title'] = $title;

$context['this_dir'] = $this_dir;
include_once(AppDir.'/common/paging_context.php');
$context['want'] =  $want;

template_twig_files::template_load_front();