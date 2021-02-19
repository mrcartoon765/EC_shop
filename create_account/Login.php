<?php

namespace config;
$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/../config/Bootstrap.class.php';
use create_account\lib\Common;

session_start();

// "Bootstrap::DB_TYPE.":dbname=".Bootstrap::DB_NAME";host=".Bootstrap::DB_HOST";

try {
  $pdo = new \PDO(Bootstrap::DB_TYPE.':dbname='. Bootstrap::DB_NAME .';host='. Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS);
  $stmt = $pdo->prepare('SELECT * FROM Customer where mail = ?');
  $stmt->execute([$_POST['mail']]);
  $row = $stmt->fetch(\PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
echo "<pre>";
var_dump($_POST);
var_dump($stmt);
var_dump($row['mail']);
echo "</pre>";

if (!isset($row['mail'])) {
  echo 'メールアドレスまたはパスワードが間違っています。';
  return false;
}

// hash("sha3-512", $dataArr['password']);

if ($_POST['password'] === $row['password']) {
// if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(tru);
  $_SESSION['MAIL'] = $row['mail'];
  echo 'ログインしました';
} else {
  echo 'メールアドレスまたはパスワードが間違っています。';
  return false;
}