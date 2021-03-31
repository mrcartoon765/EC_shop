<?php

namespace config;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

// require_once strstr(__FILE__, $this_dir, true) . 'config/Bootstrap.class.php';

$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

$ses->checkSession();
$ctg_id = (isset($_GET['ctg_id']) === true && preg_match('/^[0-9]+$/', $_GET['ctg_id']) === 1)? $_GET['ctg_id'] : '';

$Book_title = isset($_POST['Book_title'])? htmlspecialchars($_POST['Book_title'], ENT_QUOTES,'utf-8'):'';
$Book_price = isset($_POST['Book_price'])? htmlspecialchars($_POST['Book_price'], ENT_QUOTES,'utf-8'):'';
$Book_count = isset($_POST['Book_count'])? htmlspecialchars($_POST['Book_count'], ENT_QUOTES,'utf-8'):'';

session_start();

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
$context['header'] = include Bootstrap::HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
$context['footer'] = include Bootstrap::FOOTER_FILE;