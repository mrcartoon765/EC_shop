<?php

namespace create_account;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use create_account\master\initMaster;

use create_account\lib\Database;

use create_account\lib\Common;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
  'cache' => Bootstrap::CACHE_DIR
]);

$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);
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

ini_set("display_errors", 1);
error_reporting(E_ALL);


switch ($mode) {
  case 'confirm':

    unset($_POST['confirm']);

    $dataArr = $_POST;

    if (isset($_POST['sex']) === false) {
      $dataArr['sex'] = "";
    }

    $errArr = $common->errorCheck($dataArr);

    $err_check = $common->getErrorFlg();

    $template = ($err_check === true) ? 'confirm.html.twig' : 'regist.html.twig';
    break;
    case 'back':
      $dataArr = $_POST;
      unset($dataArr['back']);
      foreach ($dataArr as $key => $value) {
          $errArr[$key] = '';
      }
      $template = 'regist.html.twig';
      break;
      case 'complete':
        $dataArr = $_POST;
        unset($dataArr['complete']);
        $column = '';
        $insData = '';

        // $dataArr['user_pass'] = hash("sha256", $dataArr['user_pass']);

        foreach ($dataArr as $key => $value) {
          $column .= $key . ', ';
          $insData .= ($key === 'sex') ? $db->quote($value) . ',' : $db->str_quote($value) . ', ';
          }

          $query = " INSERT INTO account ( "
          . $column
          . " regist_date "
          . " ) VALUES ( "
          . $insData
          . "    NOW() "
          . " ) ";

          $res = $db->execute($query);
          $db->close();
          if ($res === true) {
              header('Location: ' . Bootstrap::ENTRY_URL . 'complete.php');
              exit();
          } else {
            $template = 'regist.html.twig';
            foreach ($dataArr as $key => $value) {
                $errArr[$key] = '';
            }
            }
            break;
          }
          $sexArr = initMaster::getSex();
          $context['sexArr'] =  $sexArr;
          list($yearArr, $monthArr, $dayArr) = initMaster::getDate();
          $context['yearArr'] = $yearArr;
          $context['monthArr'] = $monthArr;
          $context['dayArr'] = $dayArr;
          $context['dataArr'] =  $dataArr;
          $context['errArr'] =  $errArr;
          $template = $twig->loadTemplate($template);
          $template->display($context);