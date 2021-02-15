<?php
namespace shopping;
$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . './../config/Bootstrap.class.php';
use shopping\Bootstrap;
use shopping\lib\PDODatabase;
use shopping\lib\Session;
use shopping\lib\Cart;
$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new Session($db);
$cart = new Cart($db);
$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader ['cache => Bootstrap::CACHE_DIR']);
$ses->checkSession();
$customer_no = $_SESSION['customer_no'];
$item_id = (isset($_GET['book_id']) === true && preg_match('/^\d+$/', $_GET[crt_id]) === 1) ? $_GET['book_id'] : '';
$crt_id = (isset($_GET['crt_id']) === true && preg_match('/^\d+$/', $_GET['crt_id']) === 1) ? $_GET['crt_id'] : '';
if ($book_id !== '') {
  $res = $cart->insCartData($customer_no, $book_id);
if ($res === false) {
  echo "商品購入に失敗しました。";
  exit();
}
}

if ($crt_id !== '') {
  $res = $cart->delCartData($crt_id);
}
$dataArr = $cart->getCartData($customer_no);

$context = [];
$context['sumNum'] = $sumNum;
$context['sumPrice'] = $sumPrice;
$context['dataArr'] = $dataArr;
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate( $filename . 'html.twig' );
$template->display($context);