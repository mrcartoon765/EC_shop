<?php 


namespace create_account;
require_once dirname(__FILE__) . '/bootstrap.class.php';
use create_account\master\initMaster;
use create_account\Bootstrap;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader,['cache' => Bootstrap::CACHE_DIR]);

session_start();

header("Content-type: text/html; charset=utf8");

$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];

header('X-FRAME-OPTIONS: SAMEORIGIN');

require_once("bootstrap.class");
$dbh = db_connect();

$errors = array();

if(empty($_POST)) {
  header("Location: registration_mail_form.php");
  exit();
}else{
  $mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;

  if ($mail == '') {
      $errors['mail'] = "メールアドレスが入力されていません。";
  }else{
    if(!preg_match(("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)))
    {$errors['mail_check'] = "メールアドレスの形式が正しくありません。";
  }
  }
}

if (count($errors) === 0){

  $urltoken = hash('sha256',uniqid(rand(),1));
  $url = "http://mrcartoon.work/registration_form.php"."?urltoken=".$urltoken;

  try{
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);

    $statement = $dbh->prepare("INSERT INTO pre_member (urltoken,mail,date) VALUES (:urltoken, :mail, now() )");

    $statement->bindValue(':urltoken', $urltoken, PDO::PARAM_STR);
    $statement->bindValue(':mail', $mail, PDO::PARAM_STR);
    $statement->execute();

    $dbh = null;
  }catch (PDOException $e){
    print('Error:' .$e->getMessage());
    die();
  }

  $mailTo = $mail;

  $returnMail = 'web@sample.com';

  $name = "Health Knowledge";
  $mail = "Health-Knowledge@sample.com";
  $subject = "【Health Knowledge】会員登録用URLのお知らせ";

  $body = <<< EOM

  {$url}
  EOM;

  mb_language('ja');
  mb_internal_encoding('UTF-8');

  $header = 'FROM: ' . mb_encode_mimeheader($name). ' <' . $mail. '>';

  if(mb_send_mail($mailTo, $subject, $body, $header, '-f'. $returnMail)) {
    $_SESSION = array();
    if(isset($_COOKIE["PHPSESSID"])) {
      setcookie("PHPSESSID", '', time() - 1800, '/');
    }
    session_destroy();
    $message = "会員登録用ページのメールを送りました。24時間以内にメールに記載されたURLからご登録ください。";
  } else {
      $errors['mail_error'] = "メールの送信に失敗しました。";
  }
}

$template = $twig->loadTemplate('registration_mail_form.html.twig');
//テンプレート読み込み
$template = $twig->loadTemplate('.html.twig');