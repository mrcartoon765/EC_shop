<?php



namespace shopping;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];


$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

use config;
use config\book_Database;
use config\Bootstrap;
use shopping\lib\book;
use shopping\lib\shopping_Session;

$db = new book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);

$ses = new shopping_Session($db);
$book = new book($db);

template_twig_files::Prepare_the_template();

$ses->checkSession();

$book_id = (isset($_GET['book_id']) === true && preg_match('/^\d+$/', $_GET['book_id']) === 1)? $_GET['book_id']: '';

if($book_id == '') {
  header('Location: ' . Bootstrap::ENTRY_URL. 'list.php');
}

$cateArr = $book->getCategoryList();

$bookData = $book->getDetailData($book_id);

$context = [];
$context['cateArr'] = $cateArr;
$context['bookData'] = $bookData[0];
$filename = basename(__FILE__,'.php');
template_twig_files::template_load_front();