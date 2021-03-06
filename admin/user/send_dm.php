<?php

namespace config;

use config\template_twig_files;

use shopping\lib\book;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


admin_login::login_session();

// PHPMailerソースを読み込む
require Bootstrap::APP_DIR . '/PHPMailer/src/PHPMailer.php';
require Bootstrap::APP_DIR . '/PHPMailer/src/SMTP.php';
require Bootstrap::APP_DIR . '/PHPMailer/src/POP3.php';
require Bootstrap::APP_DIR . '/PHPMailer/src/Exception.php';
require Bootstrap::APP_DIR . '/PHPMailer/src/OAuth.php';
require Bootstrap::APP_DIR . '/PHPMailer/language/phpmailer.lang-ja.php';

// 使う
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$title = isset($_POST['title'])? htmlspecialchars($_POST['title']):'';
$content = isset($_POST['content'])? htmlspecialchars($_POST['content']):'';
$content = nl2br($content);

// 送信設定
$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host='smtp.mailtrap.io';
$mail->SMTPAuth= true;
$mail->Username = '7771799c4a9f29';
$mail->Password = '3456710d1be2a0';
$mail->Port = 2525;
$mail->CharSet = 'utf-8';
$mail->isHTML(true);
$mail->CharSet = 'UTF-8'; //文字化け防止

$dbh = database::dbh();
$stmt = $dbh->prepare("SELECT * FROM customer WHERE dm=1");
$stmt->execute();
$customers = $stmt->fetchAll(\PDO::FETCH_ASSOC);

try{
    foreach($customers as $customer){
      $mail->setFrom('test@test.com'.'test');
      $mail->addAddress($customer['mail'],$customer['first_name']);
      $mail->Subject = mb_encode_mimeheader($title,'ISO-2022-JP');
      $mail->Body = $customer['first_name']."さま<br>".$content;
      $mail->send();
    }
    $result = 'メルマガ送信完了しました。';
  }catch(Exception $e){
    $result = '送信できませんでした。';
  }

$context['result'] = $result;
$filename = basename(__FILE__,'.php');
template_twig_files::template_load_front();