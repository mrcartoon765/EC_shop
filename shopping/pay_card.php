<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';


$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

template_twig_files::Prepare_the_template();

   session_start();
   $Books = isset($_SESSION['Books'])? $_SESSION['Books']:[];

foreach($Books as $Book_title => $cart_in_Book){
  $subtotal = (int)$cart_in_Book['Book_price']*(int)$cart_in_Book['Book_count'];
  $total += $subtotal;
}
$family_name = POST_GET::GET('$family_name','family_name');
$first_name = POST_GET::GET('$first_name','first_name');
$mail = POST_GET::GET('$mail','mail');
$tel1 = POST_GET::GET('$tel1','tel1');
$tel2 = POST_GET::GET('$tel2','tel2');
$tel3 = POST_GET::GET('$tel3','tel3');
$zip1 = POST_GET::GET('$zip1','zip1');
$zip2 = POST_GET::GET('$zip2','zip2');
$address = POST_GET::GET('$address','address');

$context['family_name']=$family_name;
$context['first_name']=$first_name;
$context['mail']=$mail;
$context['tel1']=$tel1;
$context['tel2']=$tel2;
$context['tel3']=$tel3;
$context['zip1']=$zip1;
$context['zip2']=$zip2;
$context['address']=$address;

template_twig_files::template_load_front();