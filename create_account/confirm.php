<?php

namespace config;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';
use create_account\master\initMaster;
use create_account\lib\Common;

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

$db = new account_DB(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);

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
        $dataArr['dm'] = ($dataArr['dm'] === '受信する')? 1:0;
        var_dump($dataArr['dm']);

        foreach ($dataArr as $key => $value) {
          $column .= $key . ',';
          $insData .= $db->str_quote($value) . ',';
          }
          var_dump($insData);
          echo 'この下';
          var_dump($dataArr['dm']);

          $query = " INSERT INTO Customer ("
          . $column
          . "regist_date"
          . ") VALUES ("
          . $insData
          . " NOW() "
          . " ) ";

          $res = $db->execute($query);

          echo '<pre>';
          var_dump($db);
          var_dump($query);
          var_dump($res);
          var_dump($insData);
          var_dump($query);
          echo '</pre>';
          $db->close();
          if ($res === true) {
              header('Location: ' . Bootstrap::ENTRY_URL . '/complete.php');
              exit();
          } else {
            $template = 'regist.html.twig';
            foreach ($dataArr as $key => $value) {
                $errArr[$key] = '';
            }
            }
            break;
          }

          list($yearArr, $monthArr, $dayArr) = initMaster::getDate();
          $context['yearArr'] = $yearArr;
          $context['monthArr'] = $monthArr;
          $context['dayArr'] = $dayArr;
          $context['dataArr'] =  $dataArr;
          $context['errArr'] =  $errArr;
          $template = $twig->loadTemplate($template);
          $template->display($context);

          var_dump(Bootstrap::APP_URL."create_account/confirm.php");