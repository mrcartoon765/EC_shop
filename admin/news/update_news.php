<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

admin_login::login_session();


POST_GET::array_escape();

$content = strip_tags(nl2br($content));

$dbh = database::dbh();

$stmt = $dbh->prepare("UPDATE news SET title=:title, content=:content, updated_at=now() WHERE id=:id");
$stmt->bindParam(":title",$title);
$stmt->bindParam(":content",$content);
$stmt->bindParam(":id",$id);
$stmt->execute();

header("location:" . Bootstrap::ENTRY_URL . "/news.php");