<?php

namespace config;

use config\template_twig_files;

use shopping\lib\book;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


admin_login::login_session();

$dbh = database::dbh();

$stmt = $dbh->prepare("SELECT * FROM customer");
$stmt->execute();
$customers = $stmt->fetchAll(\PDO::FETCH_ASSOC);


template_twig_files::template_load_front();