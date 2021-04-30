<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

template_twig_files::Prepare_the_template();


$delete_name = isset($_POST['delete_name'])? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';

session_start();

if($delete_name != '') unset($_SESSION['Books'][$delete_name]);

$total = 0;

$Books = isset($_SESSION['Books'])? $_SESSION['Books']:[];

foreach($Books as $Book_title => $cart_in_Book){
  $subtotal = (int)$cart_in_Book['Book_price']*(int)$cart_in_Book['Book_count'];
  $total += $subtotal;
}

if($customer_login == true){
  $total = intval($total*0.7);
}
$_SESSION['total_price'] = $total;

$context['Books_cart'] = $Books;
$context['total'] = $total;

template_twig_files::template_load_front();
