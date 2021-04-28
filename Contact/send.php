<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($document_root."/templates");

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);


require Bootstrap::APP_DIR .'PHPMailer/src/PHPMailer.php';
require Bootstrap::APP_DIR .'PHPMailer/src/SMTP.php';
require Bootstrap::APP_DIR .'PHPMailer/src/POP3.php';
require Bootstrap::APP_DIR .'PHPMailer/src/Exception.php';
require Bootstrap::APP_DIR .'PHPMailer/src/OAuth.php';
require Bootstrap::APP_DIR .'PHPMailer/language/phpmailer.lang-ja.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = isset($_POST['name'])? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8'):'';
$email = isset($_POST['email'])? htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8'):'';
$text = isset($_POST['text'])? htmlspecialchars($_POST['text'], ENT_QUOTES, 'utf-8'):'';

  $mail_body ='<h1>'.$name.'さま</h1></p><p>お問い合わせありがとうございます。</p><p>後日担当者よりご連絡いたします。</p>';
  $mail_body .='<br>';
  $mail_body .="-----------------------------------";
  $mail_body .='<p>お問い合せ内容:'.$text.'</p>';
  $mail_body .="-----------------------------------";
  $mail_body .='<br>';
  $mail_body .='<p>このメールに心当たりがない場合は破棄してください。</p>';

  $mail_body2 ='';
  $mail_body2 .='<br>';
  $mail_body2 .="-----------------------------------";
  $mail_body2 .='<p>氏名:'.$name.'</p>';
  $mail_body2 .='<p>連絡先:'.$email.'</p>';
  $mail_body2 .='<p>お問い合わせ内容:'.$text.'</p>';
  $mail_body2 .="-----------------------------------";
  $mail_body2 .='<br>';
  $mail_body2 .='<p>このメールに心当たりがない場合は破棄してください。</p>';


  $mail = new PHPMailer(true);
  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->Host='smtp.mailtrap.io';
  $mail->SMTPAuth = true;
  $mail->Username = '7771799c4a9f29';
  $mail->Password = '3456710d1be2a0';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 2525;
  $mail->CharSet = 'utf-8';
  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->setFrom('test@test.com','test');
  $mail->addAddress($email,$name);
  $mail->Subject = mb_encode_mimeheader('お問い合せありがとうございます','ISO-2022-JP');
  $mail->Body = $mail_body;

  $mail2 = new PHPMailer(true);
  $mail2->SMTPDebug = 0;
  $mail2->isSMTP();
  $mail2->Host='smtp.mailtrap.io';
  $mail2->SMTPAuth = true;
  $mail2->Username = '7771799c4a9f29';
  $mail2->Password = '3456710d1be2a0';
  $mail2->SMTPSecure = 'tls';
  $mail2->Port = 2525;
  $mail2->CharSet = 'utf-8';
  $mail2->isHTML(true);
  $mail2->CharSet = 'UTF-8';
  $mail2->setFrom('kanri@test.com','kanri');
  $mail2->addAddress('7f3660901e-1c24b0@inbox.mailtrap.io','表示名');
  $mail2->Subject = mb_encode_mimeheader('問い合わせがありました','ISO-2022-JP');
  $mail2->Body = $mail_body2;

try {
  if($mail2->send()){
    if($mail->send()){
     $result = 'お問い合わせありがとうございました。';
    } else {
      $result = '送信できませんでした。';
    }
  }

}catch(Exception $e){
    $result = '送信できませんでした。';
}
$context['result'] = $result;

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
