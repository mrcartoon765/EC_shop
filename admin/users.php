<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

session_start();

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$first_name = isset($_GET['first_name'])? htmlspecialchars($_GET['first_name'], ENT_QUOTES, 'utf-8'):'';

try{
  $dbh = new \PDO("mysql:host=mysql;dbname=BOOK_EC","root","root");
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
    $stmt = $dbh->prepare("SELECT * FROM customer WHERE first_name like :name limit :offset,:rows");
    $stmt->bindValue(":first_name",'%'.$first_name.'%');
 }

$stmt->bindParam(":offset",$offset,\PDO::PARAM_INT);
$stmt->bindParam(":rows",$rows,\PDO::PARAM_INT);
$stmt->execute();
$customer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

($customer['dm'] == 1)?
  $customer['dm'] = '受信する':
  $customer['dm'] = '-';

$context['customer']=$customer;
$context['dm'] = $customer['dm'];
$context['first_name'] = $customer['first_name'];
$context['pages'] = $pages;
$context['prev'] = $prev;
$context['page'] = $page;
$context['next'] = $next;
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);