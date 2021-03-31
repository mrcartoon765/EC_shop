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

$id = isset($_GET['id'])? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8'):'';

if($id == ''){
  header("Location:" . Bootstrap::ENTRY_URL . "/news.php");
  exit;
}

   try{
       $dbh = new \PDO("mysql:host=mysql;dbname=corporate_db","root","root");
   }catch(\PDOException $e){
       var_dump($e->getMessage());
       exit;
   }
   $stmt = $dbh->prepare("SELECT * FROM news WHERE id=:id");
   $stmt->bindParam(":id",$id);
   $stmt->execute();
   $news = $stmt->fetchAll(\PDO::FETCH_ASSOC);

$context['news'] = $news;
$context['header'] = include Bootstrap::ADMIN_HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);