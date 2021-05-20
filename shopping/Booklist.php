<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$Book_data = database::data_get('book');

shopping_cart::cart_session();

template_twig_files::Prepare_the_template();

$ctg_id = POST_GET::GET($ctg_id,'ctg_id');
$Book_title = POST_GET::GET($Book_title,'Book_title');
$Book_Price = POST_GET::GET($Book_Price,'Book_Price');
$Book_count = POST_GET::GET($Book_count,'Book_count');



if(isset($_SESSION['Books'])){
  $Books = $_SESSION['Books'];
  foreach($Books as $key => $cart_Book){
    if($key == $Book_title){
      $Book_count = (int)$Book_count + (int)$cart_Book['Book_count'];
    }
  }
}


  if($Book_title!=''&&$Book_price!=''&&$Book_count!=''){
      $_SESSION['Books'][$Book_title]=[
        'Book_title' => $Book_title,
        'Book_price' => $Book_price,
        'Book_count' => $Book_count
      ];
  }
  $Books = isset($_SESSION['Books'])? $_SESSION['Books']:[];

$cateArr = $book->getCategoryList();

$Book_data = $book->getBookList($ctg_id);

$context['cateArr'] = $cateArr;
$context['Book_data'] = $Book_data;
template_twig_files::template_load_front();
