<?php

namespace config;

use config\template_twig_files;

use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

$mail = isset($_POST['mail'])? htmlspecialchars($_POST['mail'], ENT_QUOTES, 'utf-8'): '';
$password = isset($_POST['password'])? htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf-8'): '';

if($mail ==''|$password==''){
    header('location:./login.php');
}

try{
  $dbh = new \PDO($DB_BOOK_EC,"root","root");
} catch(\PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$stmt = $dbh->prepare("SELECT * FROM customer WHERE mail=:mail");
$stmt->bindParam(':mail',$mail);
$stmt->execute();

$pass = $stmt->fetch();

if(password_verify($password,$pass[2])){

$count = $stmt->rowCount();

if($count==0){
  header('location:./../login.php');
}else{
//ログイン完了

$stmt = $dbh->prepare("SELECT * FROM customer WHERE mail=:mail");
$stmt->bindParam(':mail',$mail);
$stmt->execute();
$customer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

session_start();
$_SESSION['customer_login']=true;
$_SESSION['customer_id']=$customer[0]['id'];
$_SESSION['customer_first_name']=$customer[0]['first_name'];
$_SESSION['customer_family_name']=$customer[0]['family_name'];
header("location:./../index.php");
}

}else{
  header( "refresh:5;url=./login.php" );
  $context[''] = '';
$template = $twig->loadTemplate($this_dir."login_false.html.twig");
$template->display($context);
}