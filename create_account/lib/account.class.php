<?php

namespace create_account\lib;
use config\Bootstrap;
use create_account\lib\Database;
use create_account\lib\Common;
class Account
{
  session_start();
  if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    echo '入力された値が不正です。';
    return false;
  }
}

try {
  $pdo = new PDO(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS);
  $stmt = $pdo->prepare('SELECT * FROM Customer Where mail = ?');
  $stmt->execute([$POST['mail']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EQL;
}
if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true);
  $_SESSION['mail'] = $row['mail'];
  echo 'ログインしました';
} else {
  echo 'メールアドレスまたはパスワードが間違っています。';
  return false;
}