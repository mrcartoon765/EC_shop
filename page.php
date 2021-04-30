<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
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

$context['news'] = $news;
$context['page_no'] = $page_no;

template_twig_files::template_load_front();