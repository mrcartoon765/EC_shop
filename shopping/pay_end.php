<?php

namespace config;

use config\template_twig_files;

use shopping\lib\Book;
use shopping\lib\Cart;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

template_twig_files::Prepare_the_template();

shopping_cart::cart_session();

$total = shopping_cart::cart_price_sum();

require_once '../vendor/payjp/payjp-php/init.php';

//テスト秘密鍵
\Payjp\Payjp::setApiKey("sk_test_65b851faee65cbbd22a11854");


$mail = POST_GET::GET($mail,'mail');
$family_name = POST_GET::GET($family_name ,'family_name ');
$first_name  = POST_GET::GET($first_name ,'first_name ');
$zip1  = POST_GET::GET($zip1 ,'zip1');
$zip2  = POST_GET::GET($zip2 ,'zip2');
$address  = POST_GET::GET($address ,'address');
$tel1 = POST_GET::GET($tel1 ,'tel1');
$tel2 = POST_GET::GET($tel2,'tel2');
$tel3 = POST_GET::GET($tel3,'tel3');
$customer_id = $_SESSION['customer_id'];
$payjp_token = POST_GET::GET($payjp_token,'payjp_token');

$products = isset($_SESSION['products'])? $_SESSION['products']:[];

$total = isset($_SESSION['total_price'])? $_SESSION['total_price']:[];

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

  $dbh = database::dbh();

  $stmt1 = $dbh->prepare("INSERT INTO orders(mail, zip1, zip2, address, tel1, tel2, tel3, total, customer_id, created_at, updated_at) VALUES(:mail, :zip1, :zip2, :address, :tel1, :tel2, :tel3, :total, :customer_id, now(), now())");

$stmt1->bindParam(':mail', $mail);
$stmt1->bindParam(':zip1',$zip1);
$stmt1->bindParam(':zip2',$zip2);
$stmt1->bindParam(':address',$address);
$stmt1->bindParam(':tel1',$tel1);
$stmt1->bindParam(':tel2',$tel2);
$stmt1->bindParam(':tel3',$tel3);
$stmt1->bindParam(':total',$total);
$stmt1->bindParam(':customer_id',$customer_id);
$stmt1->execute();
$order_id = $dbh->lastInsertId();

foreach($products as $key => $product){
$stmt2 = $dbh->prepare("INSERT INTO order_products(order_id,product_title,num,price,ctg_id,customer_id,table_name,product_id,product_image) VALUES(:order_id,:product_title,:num,:price,:ctg_id,:customer_id,:table_name,:product_id,:product_image)");

$stmt2->bindParam(':order_id',$order_id);
$stmt2->bindParam(':product_title',$key);
$stmt2->bindParam(':num',$product['product_count']);
$stmt2->bindParam(':price',$product['product_price']);
$stmt2->bindParam(':ctg_id',$product['product_ctg_id']);
$stmt2->bindParam(':customer_id',$customer_id);
$stmt2->bindParam(':table_name',$product['product_table_name']);
$stmt2->bindParam(':product_id',$product['product_id']);
$stmt2->bindParam(':product_image',$product['product_image']);

$stmt2->execute();
}

unset($_SESSION['products']);
unset($_SESSION['total_price']);

$context['result'] = $result_title;
$context['result_comment'] = $result;

template_twig_files::template_load_front();
