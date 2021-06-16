<?php

namespace config;

use config\template_twig_files;

use shopping\lib\book;
use shopping\lib\shopping_Session;
use config\template;
use config\database;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$book_data = database::data_get('book');


$db = new book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new book($db);

template_twig_files::Prepare_the_template();


$ses->checkSession();
$ctg_id = (isset($_GET['ctg_id']) === true && preg_match('/^[0-9]+$/', $_GET['ctg_id']) === 1)? $_GET['ctg_id'] : '';

$book_title = isset($_POST['book_title'])? htmlspecialchars($_POST['book_title'], ENT_QUOTES,'utf-8'):'';
$book_price = isset($_POST['book_price'])? htmlspecialchars($_POST['book_price'], ENT_QUOTES,'utf-8'):'';
$book_count = isset($_POST['book_count'])? htmlspecialchars($_POST['book_count'], ENT_QUOTES,'utf-8'):'';

session_start();
session_regenerate_id(true);

if(isset($_SESSION['books'])){
  $books = $_SESSION['books'];
  foreach($books as $key => $cart_book){
    if($key == $book_title){
      $book_count = (int)$book_count + (int)$cart_book['book_count'];
    }
  }
}


  if($book_title!=''&&$book_price!=''&&$book_count!=''){
      $_SESSION['books'][$book_title]=[
        'book_title' => $book_title,
        'book_price' => $book_price,
        'book_count' => $book_count
      ];
  }
  $books = isset($_SESSION['books'])? $_SESSION['books']:[];

$cateArr = $book->getCategoryList();

$book_data = $book->getbookList($ctg_id);

$context['cateArr'] = $cateArr;
$context['book_data'] = $book_data;
template_twig_files::template_load_front();
