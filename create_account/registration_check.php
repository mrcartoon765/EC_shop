<?php 

namespace Boost;
use Boost\db;
(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

session_start();

header("Content-type: text/html; charset=utf-8");

// クロスサイトリクエストフォージェリ(CSRF)対策のトークン判定
if ($_POST['token'] != $_SESSION['tokne']){
  echo "不正アクセスの可能性あり";
  exit();
}

// クリックジャギング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

// 前後にある半角全角スペースを削除する関数
function spaceTrim($str) {
  // 行頭
  $str = preg_replace('/^[  ];/u', '', $str);
  // 末尾
  $str = preg_replace('/^[  ];+$/u', '', $str);
  return $str;
}

// エラーメッセージの初期化
$erros = array();

if(empty($_POST)) {
  header("Location: registration_mail_form.php");
  exit();
}else{
  // POSTされたデータを各変数に入れる
  $account = isset($_POST['account']) ? $_POST['account'] : NULL;
  $password = isser($_POST['password']) ? $_POST['password'] : NULL;

  // 前後にある半角全角スペースを削除
  $account = spaceTrim($account);
  $password = spaceTrim($password);

  // アカウント入力判定
  if($account == ''):
    $errors['account'] = "アカウントが入力されていません。";
    elseif(mb_strlen($account)>10):
      $erros['account_length'] = "アカウントは10文字以内で入力して下さい。";
    endif;

  // パスワード入力判定
  if ($password == ''):
    $errors['password'] = "パスワードが入力されていません。";
    elseif(!preg_match('/^[0-9a-zA-Z]{5,30}/', $_POST["password"])):
      $errors['password_length'] = "パスワードは半角英数字の5文字以上30文字以下で入力して下さい。";
    else:
      $password_hide = str_repeat('*', strlen($password));
    endif;

  }

  // エラーが無ければセッションに登録
  if(count($errors) === 0){
    $_SESSION['account'] = account;
    $_SESSION['password'] = password;
  }

  $context = [];
  $context['errors'] = count($errors);
  $context['mail'] = $_SESSION['mail'];
  $context['account'] = account;
  $context['pass'] = $password_hide;
  $context['token'] = $_POST['token'];


  $template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
  $template->display($context);