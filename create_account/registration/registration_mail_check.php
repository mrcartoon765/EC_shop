<?php

namespace Boost;
use Boost\db;

(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

session_start();

header("Content-type: text/html; charset=utf-8");

// クロスサイトリクエストフォージェリ(CSRF)対策のトークン判定
if ($_POST['token'] != $_SESSION['token']){
    echo "不正アクセスの可能性あり";
    exit();
}


//クリックジャギング対策
header('X-FRAME-OPTIONS: SAMEOGIN');

// DB接続
// $db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$dbh = $db;

// エラーメッセージの初期化
$errors = array();

if(empty($_POST)) {
    header("Location: registration_mail_form.php");
    exit();
} else {
    // POSTされたデータを変数に入れる
    $mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
}
//メール入力判定
if ($mail == ''){
    $errors['mail'] = "メールが入力されていません。";
}else{
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)){
        $errors['mail_check'] = "メールアドレスの形式が正しくありません。";
    }
    /*
    ここで本登録用のmemberテーブルにすでに登録されているmailかどうかをチェックする。
    $errors['member_check'] = "このメールアドレスはすでに利用されております。";
    */
}

if (count($errors) === 0){

	$urltoken = hash('sha256',uniqid(rand(),1));
	$url = "http://◯◯◯.co.jp/registration_form.php"."?urltoken=".$urltoken;

	//ここでデータベースに登録する
	try{
		//例外処理を投げる（スロー）ようにする
		$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		$statement = $dbh->prepare("INSERT INTO pre_member (urltoken,mail,date) VALUES (:urltoken,:mail,now() )");

		//プレースホルダへ実際の値を設定する
		$statement->bindValue(':urltoken', $urltoken, \PDO::PARAM_STR);
		$statement->bindValue(':mail', $mail, \PDO::PARAM_STR);
		$statement->execute();

		//データベース接続切断
		$dbh = null;

	}catch (\PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}

	//メールの宛先
	$mailTo = $mail;

	//Return-Pathに指定するメールアドレス
	$returnMail = 'web@sample.com';

	$name = "HealthKnowledge";
	$mail = 'web@sample.com';
	$subject = "【HealthKnowledge】会員登録用URLのお知らせ";

$body = <<< EOM
24時間以内に下記のURLからご登録下さい。
{$url}
EOM;

	mb_language('ja');
	mb_internal_encoding('UTF-8');

    //Fromヘッダーを作成
    $header = 'From: ' . mb_encode_mimeheader($name). ' <' . $mail. '>';
    if (mb_send_mail($mailTo, $subject, $body, $header, '-f'. $returnMail)) {

        // セッション変数を全て解除
        $_SESSION = array();

        // クッキーの削除
        if (isset($_COOKIE["PHPSESSID"])) {
            setcookie("PHPSESSID", '',time() - 1800, '/');
        }

        // セッションを破棄する
        session_destroy();

        $message = "メールをお送りしました。24時間以内にメールに記載されたURLからご登録ください。";

    } else {
        $errors['mail_error'] = "メールの送信に失敗しました。";
    }
}

$context = [];

$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);