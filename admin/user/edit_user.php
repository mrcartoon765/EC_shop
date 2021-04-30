<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

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

template_twig_files::template_load_front();