<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

session_start();

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$id = isset($_POST['id'])? htmlspecialchars($_POST['id'], ENT_QUOTES, 'utf-8'):'';
$first_name = isset($_POST['first_name'])? htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'utf-8'):'';
$mail = isset($_POST['mail'])? htmlspecialchars($_POST['mail'], ENT_QUOTES, 'utf-8'):'';

try{
    $dbh = new \PDO("mysql:host=mysql;dbname=Book_EC","root","root");
}catch(\PDOException $e){
    var_dump($e->getMessage());
    exit;
}

$stmt = $dbh->prepare("UPDATE Customer SET first_name=:first_name, mail=:mail, update_date=now() WHERE Customer.id=:id");
$stmt->bindParam(":first_name",$first_name);
$stmt->bindParam(":mail",$mail);
$stmt->bindParam(":id",$id);
$stmt->execute();

header("location:" . Bootstrap::ENTRY_URL . "/users.php");