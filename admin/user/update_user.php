<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();

$id = POST_GET::GET('$id','id');
$first_name = POST_GET::GET('$first_name','first_name');
$mail = POST_GET::GET('$mail','mail');

$dbh = database::dbh();
$stmt = $dbh->prepare("UPDATE Customer SET first_name=:first_name, mail=:mail, update_date=now() WHERE Customer.id=:id");
$stmt->bindParam(":first_name",$first_name);
$stmt->bindParam(":mail",$mail);
$stmt->bindParam(":id",$id);
$stmt->execute();

header("location:" . Bootstrap::ENTRY_URL . "/users.php");