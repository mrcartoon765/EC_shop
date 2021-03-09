<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

try{
  $dbh = new \PDO("mysql:host=localhost;dbname=corporate_db","root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$stmt = $dbh->prepare("SELECT * FROM news ORDER BY id DESC LIMIT 5");
$stmt->execute();
$news = $stmt->fetchAll(\PDO::FETCH_ASSOC);

preg_match('/id=(\d+)/',($_SERVER["argv"][0]),$page_no);
$page_no = intval($page_no[1]);
$page_array = array_column($news,'id');
$page_no = array_search($page_no,$page_array);

echo '<pre>';
var_dump($news);//デバック箇所の挿入で上一行とこの行の繰り返し;
var_dump(array_column($news,'id'));
var_dump(array_search($page_no,$page_array));
echo '</pre>';

$context['news'] = $news;
$context['page_no'] = $page_no;

$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);