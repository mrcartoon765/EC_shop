<?php

namespace create_account;
require_once dirname(__FILE__) . '/Bootstrap.class.php';
use create_account\Bootstrap;
use create_account\master\initMaster;
use create_account\lib\Database;
use create_account\lib\Common;

// テンプレート指定
$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
 'cache' => Bootstrap::CACHE_DIR
]);
$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);
$query = " SELECT "
. "    account_id, "
. "    family_name, "
. "    first_name, "
. "    family_name_kana, "
. "    first_name_kana, "
. "    sex, "
. "    email, "
. "    regist_date "
. "    FROM "
. "    account ";

$dataArr = $db->select($query);
$db->close();

$context = [];
$context['dataArr'] = $dataArr;
$template = $twig->loadTemplate('list.html.twig');
$template->display($context);