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

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();

database::data_get('book');

$context['product_data'] = $DB_DATA_GET;

$context['detail'] = Bootstrap::APP_URL.$this_dir."detail.php?id=";

<<<<<<< HEAD
template_twig_files::template_load_front();
=======
template_twig_files::template_load_front();
>>>>>>> 732ea3bdaf05bbc353e0af5acc3c8e6fa8cc0161
