<?php 

namespace Boost;
use Boost\db;
(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

session_start();

header("Content-type: text/html; charset=utf-8");

// クロスサイトリクエストフォージュエリ(CSRF)対策のトークン判定
if ($_POST['token'] != $_SESSION['token']) {
  echo "不正アクセスの可能性あり";
  exit();
}

// クリックジャギング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

// DB接続
require_once '../../db.php';
$dbh = $db;

// エラーメッセージの初期化
$erros = array();

if (empty($_POST)) {
  header("Location: registration_mail_form.php");
  exit();
}

$mail = $_SESSION['mail'];
$account = $_SESSION['account'];

// パスワードのハッシュ化
$password_hash = password_hash($_SESSION['password'], PASSWORD_DEFAULT);

// データベース登録
try{
  // 例外処理を投げる（スロー）ようにする
  $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::PARAM_STR);

  // トランザクション開始
  $dbh->beginTransaction();

  // memberテーブルに本登録する
  $statment = $dbh->prepare("INSERT INTO member (account,mail,password) VALUES (:account, :mail, :password_hash)");

  //プレースホルダへ実際の値を設定する
  $statement->bindValue(':account', $account, \PDO::PARAM_STR);
  $statement->bindValue(':mail', $mail, \PDO::PARAM_STR);
  $statement->bindValue(':password_hash', $password_hash, \PDO::PARAM_STR);
  $statement->execute();

  // pre_memberのflagを1にする
  $statement = $dbh->prepare("UPDATE pre_member SET flag=1 WHERE mail=(:mail)");
  // プレースホルダへの実際の値を設定する
  $statement->bindValue(':mail', $mail, \PDO::PARAM_STR);
  $statement->excecute();

  // トランザクション完了
  $statment->commit();

  // DB接続切断
  $dbh = null;

  // セッション変数をすべて解除
  $_SESSION = array();

  // セッションクッキーの削除・sessioniとの関係を探れ。つまり始めのsessionidを名前でやる。
  if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("OHOSESSID", '', time() - 1800, '/');
  }

  // セッションを破棄する
  session_destroy();


  // 登録完了のメールを送信

} catch (\PDOException $e) {
  // トランザクション取り消し（ロールバック）
  $dbh->rollback();
  $errors['error'] = "もう一度やり直してください。";
  print('Error:'.$e->getMessage());
}

$context['errors'] = $errors;


$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);