<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

use create_account\lib\Common;
use create_account\master\initMaster;
use PDOException;

template_twig_files::Prepare_the_template();

$db = new account_DB(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);

// echo '<pre>';
$a = $_SERVER["HTTP_REFERER"];
// var_dump($a);
$b = $_SERVER["HTTP_ORIGIN"].'//';
// var_dump($b);
// var_dump(str_replace($b,'',$a));
$c = str_replace($b,'',$a);
$confirm_temp_dir = '/'.(strstr($c,'/',true)).'/';
// var_dump($confirm_temp_dir);
// echo '</pre>';

// exit;

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
// if ($_POST['edit_customer'] == 1 ) {
//     $mode = 'edit_customer';
//     $_SESSION['edit_customer'] == 1;
// }

// var_dump($mode);
// exit;
switch ($mode) {
    case 'confirm':

        unset($_POST['confirm']);

        $dataArr = $_POST;

        $errArr = $common->errorCheck($dataArr);

        $err_check = $common->getErrorFlg();

        // var_dump($errArr);
        // exit;
        // var_dump($err_check);

        if(isset($_POST['edit_customer'])){

        if( $_POST['edit_customer'] == 1 && $err_check === true)
            {
            $_POST['edit_customer'] = 0;
            $confirm_temp_dir = '/customer/';
            $template = 'confirm.html.twig';
            break;
        } else {
        $confirm_temp_dir = '/customer/';
        $template = 'edit_customer_rewrite.html.twig';
        break;}
        }

        $template = ($err_check === true) ? 'confirm.html.twig' : 'regist.html.twig';
        break;

    case 'edit_customer';

        $dataArr = $_POST;

        $errArr = $common->errorCheck($dataArr);

        $err_check = $common->getErrorFlg();

        $template = ($err_check === true) ? 'confirm.html.twig' : 'edit_customer_rewrite.html.twig';
        break;

    case 'back':
        $dataArr = $_POST;
        unset($dataArr['back']);
        foreach ($dataArr as $key => $value) {
            $errArr[$key] = '';
        }
        if($_POST['edit_customer'] == 1){
        $confirm_temp_dir = '/customer/';
        $template = 'edit_customer_rewrite.html.twig';
            break;
        }
        $template = 'regist.html.twig';
        break;

    case 'complete':
        $dataArr = $_POST;
        unset($dataArr['complete']);
        $column = '';
        $insData = '';

        $dataArr['password'] = password_hash($dataArr['password'], PASSWORD_DEFAULT);
        $dataArr['dm'] = ($dataArr['dm'] === '受信する') ? intval(1) : intval(0);

        if( $_POST['edit_customer'] == 1 ){
            unset($dataArr['edit_customer']);
            $_POST['edit_customer'] = 0;

        foreach ($dataArr as $key => $value) {
            $column .= "`".$key . "` = '" .$value."', " ;
          $query= "UPDATE customer SET ".$column
          ."update_date = NOW() ". "WHERE id = " .$_SESSION['customer_id'];
        }
        //   $confirm_temp_dir = '/customer/';
        //   $template = 'confirm.html.twig';
        //   break;

          $res = $db->execute($query);

        if ($res === true) {
            header('Location:' . Bootstrap::ENTRY_URL . '/complete.php');
            exit();}
        }

        foreach ($dataArr as $key => $value) {
            $column .= $key . ',';
            $insData .= $db->str_quote($value) . ',';
        }

        $query = "INSERT INTO Customer("
            . $column . "regist_date" . ") VALUES (" . $insData . " NOW()" ." );";

        $res = $db->execute($query);

        if ($res === true) {
            header('Location:' . Bootstrap::ENTRY_URL . '/complete.php');
            exit();
        } else {
            if($_POST['edit_customer'] == 1){
                $template = 'edit_customer_rewrite.html.twig';
            foreach ($dataArr as $key => $value) {
                $errArr[$key] = '';
            }
            }else{
            $template = 'regist.html.twig';
            foreach ($dataArr as $key => $value) {
                $errArr[$key] = '';
            }}
        }
        break;
}

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();
$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;

// if ($_POST['edit_customer'] == 1) {
// $edit_temp = '/customer/';
// $template = $GLOBALS['twig']->loadTemplate($edit_temp. $template);
// $template->display($GLOBALS['context']);
// }else{
    // var_dump('/'.$confirm_temp_dir.'/'.$template);
$template = $GLOBALS['twig']->loadTemplate($confirm_temp_dir .  $template);
$template->display($GLOBALS['context']);