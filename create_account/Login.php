<?php

namespace config;
$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/../config/Bootstrap.class.php';
use create_account\lib\Common;

session_start();

try {
  $pdo = new \PDO(Bootstrap::DB_TYPE.':dbname='. Bootstrap::DB_NAME .';host='. Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS);
  $stmt = $pdo->prepare('SELECT * FROM Customer where mail = ?');
  $stmt->execute([$_POST['mail']]);
  $row = $stmt->fetch(\PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}

if (!isset($row['mail'])) {
  echo 'メールアドレスまたはパスワードが間違っています1。';
  return false;
}

if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true);
  $_SESSION['MAIL'] = $row['mail'];
  echo 'ログインしました';
} else {
  echo 'メールアドレスまたはパスワードが間違っています2。';
  return false;
}
echo "<a href= Bootstrap::APP_URL >トップへ戻る</a>";
echo "<a href= logout.php>ログアウト</a>";
