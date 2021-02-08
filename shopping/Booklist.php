<?php

use Boost\db;
use shopping\lib;

(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Boost\Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);


require_once dirname(__FILE__) . "/lib/Session.class.php";
$ses = new shopping\lib\Session($db);
require_once dirname(__FILE__) . "/lib/Book.class.php";
$itm = new shopping\lib\Book($db);

$ses->checkSession();


$ctg_id = (isset($_GET['ctg_id']) === true && preg_match('/^[0-9]+$/', $_GET['ctg_id']) === 1) ? $_GET['ctg_id'] : '';

ini_set("display_errors", 1);
error_reporting(E_ALL);

$cateArr = $item->getCategoryList();
$dataArr = $item->getCategoryList();
$dataArr = $item->getItemList($ctg_id);
$context = [];
$context['cateArr'] = $cateArr;
$context['dataArr'] = $dataArr;
$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);