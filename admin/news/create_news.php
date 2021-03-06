<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


session_start();
session_regenerate_id(true);

  if($_SESSION['admin_login'] == false){
    header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
    exit;
  }

  
template_twig_files::template_load_front();