<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

use create_account\master\initMaster;

$dataArr = [
  'id' => '',
  'mail' => '',
  'password' => '',
  'flag' => '',
  'family_name' => '',
  'first_name' => '',
  'family_name_kana' => '',
  'first_name_kana' => '',
  'year' => '',
  'month' => '',
  'day' => '',
  'zip1' => '',
  'zip2' => '',
  'address' => '',
  'tel1' => '',
  'tel2' => '',
  'tel3' => '',
  'contents' => '',
  'regist_date' => '',
  'update_date' => '',
  'delete_date' => '',
  'delete_flg' => '',
  'dm'        => ''
];
$errArr = [];
foreach ($dataArr as $key => $value) {
  $errArr[$key] = '';
}

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();

$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;
$context['header'] = include Bootstrap::HEADER_FILE;
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);
$context['footer'] = include Bootstrap::FOOTER_FILE;