<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\Cart;
use shopping\lib\shopping_Session;
use Symfony\Component\VarDumper\Cloner\Data;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';


$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

template_twig_files::Prepare_the_template();

customer_login::login_session();

// var_dump($_SESSION);

  if($customer_login == true){

    $customer_id = $_SESSION['customer_id'];

    $customer_data = database::get_detail_data('customer',$_SESSION['customer_id']);
    $family_name = $customer_data['family_name'];
    $first_name = $customer_data['first_name'];
    $mail = $customer_data['mail'];
    $tel1 = $customer_data['tel1'];
    $tel2 = $customer_data['tel2'];
    $tel3 = $customer_data['tel3'];
    $zip1 = $customer_data['zip1'];
    $zip2 = $customer_data['zip2'];
    $address = $customer_data['address'];

  }else{
    //ログインしていない状態
     $family_name = '';
     $first_name  = '';
     $mail        = '';
     $address     = '';
  }
   shopping_cart::cart_session();
   shopping_cart::cart_sum();

$context['family_name'] = $family_name;
$context['first_name'] = $first_name;
$context['mail'] = $mail;
$context['address'] = $address;
$context['tel1'] = $tel1;
$context['tel2'] = $tel2;
$context['tel3'] = $tel3;

$context['zip1'] = $zip1;
$context['zip2'] = $zip2;

var_dump($_SESSION);

template_twig_files::template_load_front();