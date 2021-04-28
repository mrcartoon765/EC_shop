<?php

namespace config;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

// require_once strstr(__FILE__, $this_dir, true) . 'config/Bootstrap.class.php';

$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

$loader = new \Twig_Loader_Filesystem($document_root."/templates");
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);


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

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
