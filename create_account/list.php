<?php

// namespace create_account;
namespace config;
$this_dir = basename(__DIR__);
require_once dirname(__FILE__) . '/../config/Bootstrap.class.php';
// use create_account\master;
// use create_account\lib\Common;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
 'cache' => Bootstrap
]);

$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);
$query = " SELECT "
. "    id, "
. "    mail, "
. "    password, "
. "    flag, "
. "    family_name, "
. "    first_name, "
. "    family_name_kana, "
. "    first_name_kana, "
. "    sex, "
. "    email, "
. "    regist_date "
. "    FROM "
. "    Customer ";

$dataArr = $db->select($query);
$db->close();

$context = [];
$context['dataArr'] = $dataArr;

// $template = $twig->loadTemplate('list.html.twig');
// $template->display($context);

$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);