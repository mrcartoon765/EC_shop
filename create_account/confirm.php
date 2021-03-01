<?php

namespace config;
$this_dir = basename(__DIR__);
$this_dir === "portforio" ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';
use create_account\master\initMaster;
use create_account\lib\Common;

$loader = new \Twig_Loader_Filesystem(
  $this_dir !== portforio ? Bootstrap::TEMPLATE_DIR : NULL);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

$db = new account_DB(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);
// new \PDO(Bootstrap::DB_TYPE.':dbname='. Bootstrap::DB_NAME .';host='. Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS);

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

        $dataArr['password'] = password_hash($dataArr['password'],PASSWORD_DEFAULT);

        foreach ($dataArr as $key => $value) {
          $column .= $key . ', ';
          $insData .= ($key === 'sex') ? $db->quote($value) . ',' : $db->str_quote($value) . ', ';
          }

          $query = " INSERT INTO Customer ( "
          . $column
          . " regist_date "
          . " ) VALUES ( "
          . $insData
          . " NOW() "
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