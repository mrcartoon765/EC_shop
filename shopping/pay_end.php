<?php

namespace config;

use shopping\lib\Book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$db = new Book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new Book($db);

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);


require_once '../vendor/payjp/payjp-php/init.php';

\Payjp\Payjp::setApiKey("*******");

$mail = isset($_POST['mail'])? htmlspecialchars($_POST['mail'],ENT_QUOTES,'utf-8'):'';
$family_name = isset($_POST['family_name'])? htmlspecialchars($_POST['family_name'],ENT_QUOTES,'utf-8'):'';
$first_name = isset($_POST['first_name'])? htmlspecialchars($_POST['first_name'],ENT_QUOTES,'utf-8'):'';
$zip1 = isset($_POST['zip1'])? htmlspecialchars($_POST['zip1'],ENT_QUOTES,'utf-8'):'';
$zip2 = isset($_POST['zip2'])? htmlspecialchars($_POST['zip2'],ENT_QUOTES,'utf-8'):'';
$address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';
$tel1 = isset($_POST['tel1'])? htmlspecialchars($_POST['tel1'],ENT_QUOTES,'utf-8'):'';
$tel2 = isset($_POST['tel2'])? htmlspecialchars($_POST['tel2'],ENT_QUOTES,'utf-8'):'';
$tel3 = isset($_POST['tel3'])? htmlspecialchars($_POST['tel3'],ENT_QUOTES,'utf-8'):'';
$payjp_token = isset($_POST['payjp_token'])? htmlspecialchars($_POST['payjp_token'],ENT_QUOTES,'utf-8'):'';

session_start();

$Books = isset($_SESSION['Books'])? $_SESSION['Books']:[];
$total = isset($_SESSION['total_price'])? $_SESSION['total_price']:0;

$res = \Payjp\Charge::create([
          "card" => $payjp_token,
          "amount" => (int)$total,
          "currency" => 'jpy'
]);

if($res['error']){
  $result = '決済処理に失敗しました。';
  $result_title = '決済失敗';
}else{
  $result = 'ご購入ありがとうございます。';
  $result_title = '購入完了';
}

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$stmt1 = $dbh->prepare("INSERT INTO order_data(mail, family_name, first_name, zip1, zip2, address, tel1, tel2, tel3, total, created_at, update_at) VALUES(:mail, :family_name, :first_name,  :zip1, :zip2, :address, :tel1, :tel2, :tel3, :total, now(), now())");
$stmt1->bindParam(':mail', $mail);
$stmt1->bindParam(':family_name', $family_name);
$stmt1->bindParam(':first_name',$first_name);
$stmt1->bindParam(':zip1',$zip1);
$stmt1->bindParam(':zip2',$zip2);
$stmt1->bindParam(':address',$address);
$stmt1->bindParam(':tel1',$tel1);
$stmt1->bindParam(':tel2',$tel2);
$stmt1->bindParam(':tel3',$tel3);
$stmt1->bindParam(':total',$total);
$stmt1->execute();
$order_id = $dbh->lastInsertId();

foreach($Books as $key => $cart_in_Book){
$stmt2 = $dbh->prepare("INSERT INTO order_products(order_id,Book_title,num,price) VALUES(:order_id,:Book_title,:num,:price)");
$stmt2->bindParam(':order_id',$order_id);
$stmt2->bindParam(':Book_title',$key);
$stmt2->bindParam(':num',$cart_in_Book['Book_count']);
$stmt2->bindParam(':price',$cart_in_Book['Book_price']);
$stmt2->execute();
}

unset($_SESSION['Books']);
unset($_SESSION['total_price']);

$context['result'] = $result_title;
$context['result_comment'] = $result;
$context['header'] = include Bootstrap::HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
$context['footer'] = include Bootstrap::FOOTER_FILE;