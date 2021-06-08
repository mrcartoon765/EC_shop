<?php
namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;
use config\want;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

customer_login::login_session();

template_twig_files::Prepare_the_template();

$want_list  = database::get_data_where('want','customer_id',$_SESSION['customer_id']);

foreach ($want_list as $key => $value){
  $id[$key] = $value['created_date'];
}

array_multisort($id, SORT_DESC, $want_list);


if (isset($_POST['id']) && ($_POST['delete'] == 'YES' )){
  database::delete_where('want','id',$_POST['id']);
  unset($_POST['id'],$_POST['delete']);
  header('Location:./want_list.php');
}

var_dump($_POST);



$context['product_data'] = $want_list;
$context['title'] = $title;
$context['this_dir'] = $this_dir;
$context['image_directory'] = 'shopping/image/'.$want_list['table_name'].'/';
$img = AppUrl.'//shopping/image/';
$context['img'] = $img;


template_twig_files::template_load_front();