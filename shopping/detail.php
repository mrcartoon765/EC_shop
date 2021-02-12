<?php

namespace shopping;
require_once dirname(__FILE__) . '/Bootstrap.class.php';
use shopping\Bootstrap;
use shopping\lib\PDODatabase;
use shopping\lib\Session;
use shopping\lib\Book;
$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);

$ses = new Session($db);
$Book = new Book($db);

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
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