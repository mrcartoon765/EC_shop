<?php

use Boost;
use Boost\db;
use shopping\lib;
use shopping\lib\Book;
use shopping\lib\Session;
(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$ses = new \shopping\lib\Session($db);
$item = new \shopping\lib\Book($db);

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

$ses->checkSession();

$id = (isset($_GET['id']) === true && preg_match('/^\d+/', $_GET['id']) === 1) ? $_GET['id'] : '';

if ($id === '') {
  header('Location: ' . Bootstrap::ENTRY_URL. 'list.php');
}

$cateArr = $item->getCategoryList();
$itemData = $item->getItemDetailData($item_id);

$context = [];
$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);