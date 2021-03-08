<?php

namespace config;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];


var_dump($this_dir);


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

$cateArr = $book->getCategoryList();

echo "カートに入れる";
echo "\n\n";
echo "イイネ！";
echo "\n\n";
echo "レビュー";
echo "\n\n";
echo "画像表示";
echo "\n\n";
echo "商品説明";
echo "\n\n";
echo "価格";
echo "\n\n";

$dataArr = $book->getBookList($ctg_id);
$context = [];
$context['cateArr'] = $cateArr;
$context['dataArr'] = $dataArr;
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);