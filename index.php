<?php

namespace config;

$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

echo 'トップページ';
echo "<br>";
print '<a href="./create_account/index.php">ログイン</a>';
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

$context = [];
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);