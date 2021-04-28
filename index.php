<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$loader = new \Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/templates");

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$stmt = $dbh->prepare("SELECT * FROM news ORDER BY id DESC LIMIT 5");
$stmt->execute();
$news = $stmt->fetchAll(\PDO::FETCH_ASSOC);

$context['news'] = $news;
$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
