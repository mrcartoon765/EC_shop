<?php
namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;
use config\want;

use function Composer\Autoload\includeFile;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

customer_login::login_session();

template_twig_files::Prepare_the_template();

$want_list  = want::get_db_want_products();

original_Mysql_command::search_data_and_paging('want','id');

if(isset($_POST["delete"])){
  want::want_list_delete();
  unset($_POST["delete"]);
}

$want_list = $GLOBALS['search'];

$context['product_data'] = $want_list;
$context['title'] = $title;
$context['this_dir'] = $this_dir;
$context['image_directory'] = 'shopping/image/'.$want_list['table_name'].'/';
$img = AppUrl.'/shopping/image/';
$context['img'] = $img;

include_once(AppDir.'/common/paging_context.php');

template_twig_files::template_load_front();