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

  if($customer_login == true){

    $customer_id = $_SESSION['customer_id'];

    try{
      $dbh = new  \PDO($DB_BOOK_EC,"root","root");
    }catch(\PDOException $e){
      var_dump($e->getMessage());
      exit;
    }
    $stmt = $dbh->prepare("SELECT * FROM Customer WHERE id=:id");
    $stmt->bindParam(":id",$customer_id);
    $stmt->execute();
    $customer_data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      
    $family_name = $customer_data[0]['family_name'];
    $first_name = $customer_data[0]['first_name'];
    $mail = $customer_data[0]['mail'];
    $address = $customer_data[0]['address'];

  }else{
    //ログインしていない状態
     $family_name = '';
     $first_name  = ''; 
     $mail        = ''; 
     $address     = ''; 
  }

   session_start();
   $Books = isset($_SESSION['Books'])? $_SESSION['Books']:[];

foreach($Books as $Book_title => $cart_in_Book){
  $subtotal = (int)$cart_in_Book['Book_price']*(int)$cart_in_Book['Book_count'];
  $total += $subtotal;
}

$context['family_name'] = $family_name;
$context['first_name'] = $first_name;
$context['mail'] = $mail;
$context['address'] = $address;


$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
