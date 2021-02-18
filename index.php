<?php

echo 'トップページ';
echo "<br>";
print '<a href="./create_account/Login.php">ログイン</a>';
echo "<br>";
print '<a href="./shopping/Booklist.php">本一覧</a>';
echo "<br>";
print '<a href="./create_account/regist.php">新規登録</a>';

function h($s){
   return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
 }

 session_start();

 if (isset($_SESSION['EMAIL'])) {
   echo 'ようこそ' . h($_SESSION['EMAIL']) . "さん<br>";
   echo "<a href='/logout.php'>ログアウト</a>";
   exit;
 }