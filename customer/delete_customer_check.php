<?php

namespace config;

use config\template_twig_files;

use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

customer_login::login_session();

database::customer_delete($_POST['mail'],$_POST['password'],$_SESSION['customer_id']);
exit;

// if($mail ==''|$password==''){
//     header('location:./login.php');
// }



// $stmt = $dbh->prepare("SELECT * FROM customer WHERE mail=:mail");
// $stmt->bindParam(':mail',$mail);
// $stmt->execute();

// $pass = $stmt->fetch();

// if(password_verify($password,$pass[2])){

// $count = $stmt->rowCount();

// if($count==0){
//   header('location:./../delete_customer.php');
// }else{
// //ログイン完了

// $stmt = $dbh->prepare("SELECT * FROM customer WHERE mail=:mail");
// $stmt->bindParam(':mail',$mail);
// $stmt->execute();
// $customer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

// session_start();
session_regenerate_id(true);
// $_SESSION['customer_login']=true;
// $_SESSION['customer_id']=$customer[0]['id'];
// $_SESSION['customer_first_name']=$customer[0]['first_name'];
// $_SESSION['customer_family_name']=$customer[0]['family_name'];
// header("location:./../index.php");
// }

// }else{
//   header( "refresh:5;url=./login.php" );
//   $context[''] = '';
// $template = $twig->loadTemplate($this_dir."login_false.html.twig");
// $template->display($context);
// }