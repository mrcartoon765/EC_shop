<?php
namespace config;

use config\template_twig_files;
use create_account\lib\Common;
use create_account\master\initMaster;
use config\original_Mysql_command;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


$db = new account_DB(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);

// $login_session = customer_login::login_session();

$login_data = customer_login::login_data();

// var_dump($_SESSION);

$query = original_Mysql_command::customer_data_update('customer');

// var_dump($_POST)

$common = new Common();
if (isset($_POST['confirm']) === true) {
    $mode = 'confirm';
}
if (isset($_POST['back']) === true) {
    $mode = 'back';
}
if (isset($_POST['complete']) === true) {
    $mode = 'complete';
}

switch ($mode) {
    case 'confirm':

        unset($_POST['confirm']);

        $dataArr = $_POST;

        $errArr = $common->errorCheck($dataArr);

        $err_check = $common->getErrorFlg();

        $template = ($err_check === true) ? 'confirm.html.twig' : 'edit_customer.html.twig';
        break;

    case 'back':
        $dataArr = $_POST;
        unset($dataArr['back']);
        foreach ($dataArr as $key => $value) {
            $errArr[$key] = '';
        }
        $template = 'edit_customer.html.twig';
        break;

    case 'complete':
        $dataArr = $_POST;
        unset($dataArr['complete']);
        $column = '';
        $insData = '';

        $dataArr['password'] = password_hash($dataArr['password'], PASSWORD_DEFAULT);
        $dataArr['dm'] = ($dataArr['dm'] === '受信する') ? intval(1) : intval(0);
        foreach ($dataArr as $key => $value) {
            $key_value[] = $key. '=' .'"'.$value.'"'.', ';
        }
        // array_splice($key_value,-1);
        $key_value = rtrim(implode($key_value), '`, ');
        $table = 'Customer';
        $ses = $_SESSION['customer_id'];
        $sql = "UPDATE ".$table. " SET " .$key_value." WHERE id =".$ses.';';
        // return $sql;
        // var_dump($sql);



        $res = $db->execute($sql);
        // var_dump($query);

        if ($res === true) {
            header('Location:' . Bootstrap::ENTRY_URL . '/complete.php');
            exit();
        } else {
            $template = 'edit_customer.html.twig';
            foreach ($dataArr as $key => $value) {
                $errArr[$key] = '';
            }
        }
        break;
}

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();
$context['customer'] = $login_data;
$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;

template_twig_files::template_load_front();