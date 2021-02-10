<?php

namespace shopping;
require_once dirname(__FILE__) . '/Bootstrap.class.php';

use shopping\Bootstrap;
use shopping\lib\PDODatabase;
use shopping\lib\Session;
use shopping\lib\Book;
$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new Session($db);
$book = new Book($db);

$loader = new \Twig_Loader_Filesystem((Bootstrap::TEMPLATE_DIR));
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

$ses->checkSession();
$ctg_id = (isset($_GET['ctg_id']) === true && preg_match('/^[0-9]+$/', $_GET['ctg_id']) === 1)? $_GET['ctg_id'] : '';

$cateArr = $book->getCategoryList();

echo "DBからデータ取り出し表示";
echo "\n\n";
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