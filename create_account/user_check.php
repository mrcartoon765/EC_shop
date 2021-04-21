<?php

namespace config;

use Payjp\Customer;
use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

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
  header( "refresh:3;url=./login.php" );
  $context['header'] = include Bootstrap::HEADER_FILE;
  echo "<br><br><br><br><br><br><br><br>";
  echo "メ-ルアドレスあるいはパスワードが違います";
  echo "<br><br><br><br><br><br><br><br>";
  echo "3秒後ログイン画面に戻ります";
  $context['footer'] = include Bootstrap::FOOTER_FILE;
}