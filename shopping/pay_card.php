<?php

namespace config;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';


$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

$loader = new \Twig_Loader_Filesystem($document_root."/templates");
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

   session_start();
   $Books = isset($_SESSION['Books'])? $_SESSION['Books']:[];

foreach($Books as $Book_title => $cart_in_Book){
  $subtotal = (int)$cart_in_Book['Book_price']*(int)$cart_in_Book['Book_count'];
  $total += $subtotal;
}
$family_name = isset($_POST['family_name'])? htmlspecialchars($_POST['family_name'],ENT_QUOTES,'utf-8'):'';
$first_name = isset($_POST['first_name'])? htmlspecialchars($_POST['first_name'],ENT_QUOTES,'utf-8'):'';
$mail = isset($_POST['mail'])? htmlspecialchars($_POST['mail'],ENT_QUOTES,'utf-8'):'';
$tel1 = isset($_POST['tel1'])? htmlspecialchars($_POST['tel1'],ENT_QUOTES,'utf-8'):'';
$tel2 = isset($_POST['tel2'])? htmlspecialchars($_POST['tel2'],ENT_QUOTES,'utf-8'):'';
$tel3 = isset($_POST['tel3'])? htmlspecialchars($_POST['tel3'],ENT_QUOTES,'utf-8'):'';
$zip1 = isset($_POST['zip1'])? htmlspecialchars($_POST['zip1'],ENT_QUOTES,'utf-8'):'';
$zip2 = isset($_POST['zip2'])? htmlspecialchars($_POST['zip2'],ENT_QUOTES,'utf-8'):'';
$address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';

$context['family_name']=$family_name;
$context['first_name']=$first_name;
$context['mail']=$mail;
$context['tel1']=$tel1;
$context['tel2']=$tel2;
$context['tel3']=$tel3;
$context['zip1']=$zip1;
$context['zip2']=$zip2;
$context['address']=$address;

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
