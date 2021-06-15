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

if($_POST['order_id']){
    header('./shopping_history_detail.php');
$order_detail = Database::get_data_where('order_products','order_id',$_POST['order_id']);
$context['order_detail'] = $order_detail;

$data = Database::get_data_where('orders','id',$_POST['order_id']);

$context['date'] = $data[0]['created_at'];
unset($_POST['order_id']);

}


template_twig_files::template_load_front();