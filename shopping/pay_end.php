<?php

namespace config;

use config\template_twig_files;

use shopping\lib\book;
use shopping\lib\Cart;
use shopping\lib\shopping_Session;
use config\pay_end;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

template_twig_files::Prepare_the_template();

shopping_cart::cart_session();

$total = shopping_cart::cart_price_sum();

require_once '../vendor/payjp/payjp-php/init.php';

//テスト秘密鍵
\Payjp\Payjp::setApiKey("*********");

POST_GET::array_escape();

$customer_id = $_SESSION['customer_id'];

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

  if ($_SESSION['customer_login'] == true){
    pay_end::login_pay_end($mail,$zip1,$zip2,$address,$tel1,$tel2,$tel3,$total,$customer_id,$family_name,$first_name,$products);
   } else {
     pay_end::no_login_pay_end($mail,$zip1,$zip2,$address,$tel1,$tel2,$tel3,$total,$family_name,$first_name,$products);
   }

unset($_SESSION['products']);
unset($_SESSION['total_price']);

$context['result'] = $result_title;
$context['result_comment'] = $result;

template_twig_files::template_load_front();