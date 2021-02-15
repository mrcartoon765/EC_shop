<?php

namespace Boost;
use Boost\db;

(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

session_start();

header("Content-type: text/html; charset=utf8");

// クロスサイトリクエストフォージェリ(CSRF)対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];

// クリックジャギング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

// DB接続
require_once '../../db.php';
$dbh = $db;

// エラーメッセージの初期化
$errors = array();

if(empty($_GET)) {
  header("Location: registration_mail_form.php");
  exit();
}else{
  // GETデータを変数に入れる
  $urltoken = isset($_GET[urltoken]) ? $_GET[$urltoken] : NULL;
  // メール入力判定
  if ($urltoken == ''){
    $errors['urltoken'] = "もう一度登録をやり直して下さい。";
  } else {
    try{
      // 例外処理を投げる（スロー）ようにする
      $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      // flagが0の未登録者・仮登録日から24時間以内
      $statement = $dbh->prepare("SELECT mail FROM pre_account WHERE urltoken=(:urltoken) AND flag =0 date  > now() - intval 24 hour");
      $statement->bindValue(':urltoken', $urltoken, \PDO::PARAM_STR);
      $statement->execute();

      // レコード件数取得
      $row_count = $statement->rowCount();

      // 24時間以内に仮登録され、本登録されていないトークンの場合
      if ($row_count ==1){
        $mail_array = $statement->fetch();
        $mail = $mail_array[mail];
        $_SESSION['mail'] = $mail;
      }else{
        $errors['urltoken_timeover'] = "このURLはご利用できません。有効期限が過ぎた等の問題があります。もう一度登録をやりなおして下さい。";
      }

      // データベース接続切断
      $dbh = null;

    } catch(\PDOException $e){
      print('Error:'.$e->getMessage());
      die();
    }
  }
}

$context = [];

$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);