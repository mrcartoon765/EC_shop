<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


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

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
