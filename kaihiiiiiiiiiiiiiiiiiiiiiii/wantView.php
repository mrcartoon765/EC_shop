<?php

//共通変数・関数ファイルを読込み
namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

$p_id = ''; //投稿ID
$dbPostData = ''; //投稿内容
$dbPostGoodNum = ''; //いいねの数

// get送信がある場合
if(!empty($_GET['p_id'])){
    // 投稿IDのGETパラメータを取得
    $p_id = $_GET['p_id'];
    // DBから投稿データを取得
    $dbPostData = getPostData($p_id);
    // DBからいいねの数を取得
    $dbPostWantNum = count(getWant($p_id));
}

$active = (isset($_SESSION['customer_id'], $dbPostData['id']))?'active':'';

$icon =
(isset($_SESSION['customer_id'],$dbPostData['id']))?
   //いいね押したらハートが塗りつぶされる
    $icon = ' active fas':
    //いいねを取り消したらハートのスタイルが取り消される
    $icon = ' far';

// var_dump($icon);

$context['p_id'] = htmlspecialchars($p_id);
$context['active'] = $active;
$context['icon'] = $icon;
$context['WantNum'] = $dbPostWantNum;
// $context[''] = ;
// $context[''] = ;
// $context[''] = ;

template_twig_files::template_load_front();