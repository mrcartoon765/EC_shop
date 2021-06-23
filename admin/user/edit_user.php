<?php

namespace config;

use config\template_twig_files;
use create_account\master\initMaster;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

admin_login::login_session();

$id = isset($_GET['id'])? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8'):'';

if($id == ''){
  header("Location:" . Bootstrap::ENTRY_URL . "/users.php");
  exit;
}

//GETからIDを取得する
$id = (substr(strstr($_SERVER['REQUEST_URI'],'?id='),4));

$user = database::get_data_where('customer','id',$id);

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();

$context['customer'] = $user[0];

$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;
$context['year'] =$user[0]['year'];
$context['month'] =$user[0]['month'];
$context['day'] =$user[0]['day'];
$context['id'] = $id;

template_twig_files::template_load_front();