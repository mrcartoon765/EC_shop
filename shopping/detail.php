<?php



namespace shopping;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];


$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

use config;
use config\Book_Database;
use config\Bootstrap;
use shopping\lib\Book;
use shopping\lib\shopping_Session;

$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);

$ses = new shopping_Session($db);
$Book = new Book($db);

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

$ses->checkSession();

$Book_id = (isset($_GET['Book_id']) === true && preg_match('/^\d+$/', $_GET['Book_id']) === 1)? $_GET['Book_id']: '';

if($Book_id == '') {
  header('Location: ' . Bootstrap::ENTRY_URL. 'list.php');
}

$cateArr = $Book->getCategoryList();

$BookData = $Book->getDetailData($Book_id);

$context = [];
$context['cateArr'] = $cateArr;
$context['BookData'] = $BookData[0];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);