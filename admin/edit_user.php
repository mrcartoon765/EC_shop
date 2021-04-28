<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

$loader = new \Twig_Loader_Filesystem($document_root."/templates");

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

session_start();

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$id = isset($_GET['id'])? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8'):'';

if($id == ''){
  header("Location:" . Bootstrap::ENTRY_URL . "/users.php");
  exit;
}

   try{
       $dbh = new \PDO($DB_BOOK_EC,"root","root");
   }catch(\PDOException $e){
       var_dump($e->getMessage());
       exit;
   }
   $stmt = $dbh->prepare("SELECT * FROM customer WHERE id=:id");
   $stmt->bindParam(":id",$id);
   $stmt->execute();
   $user = $stmt->fetchAll(\PDO::FETCH_ASSOC);

$context['user'] = $user;
$context['header'] = include Bootstrap::ADMIN_HEADER_FILE;
$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);