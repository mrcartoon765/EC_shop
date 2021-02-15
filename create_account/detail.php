<?php

namespace create_account;

require_once dirname(__FILE__) . '/Bootstrap.class.php';
use create_account\Bootstrap;
use create_account\master\initMaster;
use create_account\lib\Database;
use create_account\lib\Common;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, array(
  'cache' => Bootstrap::CACHE_DIR
));

$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);
$initMaster = new initMaster();

ini_set("display_errors", 1);
error_reporting(E_ALL);

if (isset($_GET['account_id']) === true && $_GET['account_id'] !== '') {
    $account_id = $_GET['account_id'];
    $query = " SELECT "
    . "   account_id, "
    . "   family_name, "
    . "   first_name, "
    . "   family_name_kana, "
    . "   first_name_kana, "
    . "   sex, "
    . "   year, "
    . "   month, "
    . "   day, "
    . "   zip1, "
    . "   zip2, "
    . "   address, "
    . "   email, "
    . "   tel1, "
    . "   tel2, "
    . "   tel3, "
    . "   contents, "
    . "   regist_date "
    . " FROM "
    . "   account "
    . " WHERE "
    . "   account_id = " . $db->quote($account_id);
    $data = $db->select($query);
    $db->close();
    $dataArr = ($data !== "" && $data !== []) ? $data[0] : '';
    $context = [];
    $context['dataArr'] = $dataArr;
    $template = $twig->loadTemplate('detail.html.twig');
    $template->display($context);
    } else {
      header('Location: ' . Bootstrap::ENTRY_URL .'list.php');

      exit();
  }
