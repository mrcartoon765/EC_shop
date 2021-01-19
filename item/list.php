<?php 

namespace item;

require_once dirname(__FILE__) . '/Bootstrap.class.php';
use item\Bootstrap;
use item\lib\PDODatabase;
use item\lib\Session;
use item\lib\Item;

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new Session($db);
$itm = new Item($db);
$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
    'cache' => Bootstrap::CACHE_DIR
]);
  $ses->checkSession();
  $ctg_id = (isset($_GET['ctg_id']) === true && preg_match('/^[0-9]+$/', $_GET['ctg_id']) === 1) ? $_GET['ctg_id'] : '';

  $cateArr = $itm->getCategoryList();
  $dataArr = $itm->getItemList($ctg_id);
  $context = [];
  $context['cateArr'] = $cateArr;
  $context['dataArr'] = $dataArr;
  $template = $twig->loadTemplate('list.html.twig');
  $template->display($context);

  ini_set("display_errors", 1);
error_reporting(E_ALL);