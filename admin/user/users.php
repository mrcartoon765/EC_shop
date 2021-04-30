<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


admin_login::login_session();

$first_name = isset($_GET['first_name'])? htmlspecialchars($_GET['first_name'], ENT_QUOTES, 'utf-8'):'';

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}


// ページング設定
// 10件ずつ表示させる
$rows = 10;

// 現在表示しているページ数
$page = isset($_GET['page'])? $_GET['page']: 1;

// レコード開始位置
$offset = $rows * ($page-1);

// 全件のレコード数
if($first_name == '')
{
  $all_rows = $dbh->query("SELECT COUNT(*) FROM customer")->fetchColumn();

}else{
 // 検索条件を考慮
  $all_rows_stmt = $dbh->prepare("SELECT * FROM customer WHERE first_name like :first_name");
  $all_rows_stmt->bindValue(":first_name",'%'.$first_name.'%');
  $all_rows_stmt->execute();
  $all_rows = $all_rows_stmt->rowCount();
}

// 全件を表示させたページ数 (全件％表示件数) をし0以下の場合はページ数を１に固定する
if(($all_rows % $rows) <= 0){
    $pages = (int)($all_rows/$rows);
}else{
    $pages = (int)($all_rows/$rows)+1;
}

// 次のページ数
$next = ($page+1 > $pages)? '' : $page+1;

// １つ前のページ数
$prev = ($page-1 < 0)? '' : $page-1;

// ページング設置終わり

if($first_name == '')
{
    $stmt = $dbh->prepare("SELECT * FROM customer limit :offset,:rows");
}else{
    $stmt = $dbh->prepare("SELECT * FROM customer WHERE first_name like :first_name limit :offset,:rows");
    $stmt->bindValue(":first_name",'%'.$first_name.'%');
 }

$stmt->bindParam(":offset",$offset,\PDO::PARAM_INT);
$stmt->bindParam(":rows",$rows,\PDO::PARAM_INT);
$stmt->execute();
$customer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

$context['customer']=$customer;
$context['first_name'] = $customer['first_name'];
$context['pages'] = $pages;
$context['prev'] = $prev;
$context['page'] = $page;
$context['next'] = $next;

template_twig_files::template_load_front();