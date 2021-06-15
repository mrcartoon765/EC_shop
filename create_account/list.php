<?php

namespace config;

use config\template_twig_files;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';
use config\Bootstrap;
use create_account\lib\Database;


$loaader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

$db = new account_DB(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);
$query = " SELECT "
. "    id, "
. "    mail, "
. "    password, "
. "    flag, "
. "    family_name, "
. "    first_name, "
. "    family_name_kana, "
. "    first_name_kana, "
. "    email, "
. "    regist_date "
. "    FROM "
. "    customer ";

$dataArr = $db->select($query);
$db->close();

$context = [];
$context['dataArr'] = $dataArr;
$filename = basename(__FILE__,'.php');
template_twig_files::template_load_front();