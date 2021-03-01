<?php 

namespace config;
$this_dir = basename(__DIR__);
$this_dir === "portforio" ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';
use create_account\master\initMaster;

$loader = new \Twig_Loader_Filesystem($tempdir);
$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

$dataArr = [
  'id' => '',
  'mail' => '',
  'password' => '',
  'flag' => '',
  'family_name' => '',
  'first_name' => '',
  'family_name_kana' => '',
  'first_name_kana' => '',
  'sex' => '',
  'year' => '',
  'month' => '',
  'day' => '',
  'zip1' => '',
  'zip2' => '',
  'address' => '',
  'email' => '',
  'tel1' => '',
  'tel2' => '',
  'tel3' => '',
  'contents' => '',
  'regist_date' => '',
  'update_date' => '',
  'delete_date' => '',
  'delete_flg' => '',
];
$errArr = [];
foreach ($dataArr as $key => $value) {
  $errArr[$key] = '';
}

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();

$sexArr = initMaster::getSex();
$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['sexArr'] = $sexArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;
$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
