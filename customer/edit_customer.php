<?php

namespace config;

use config\template_twig_files;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();


use config\customer_login;
use create_account\master\initMaster;

customer_login::login_session();

$customer_logindata = customer_login::login_data();

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();

$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;
$context['customer'] = $customer_logindata;
$context['year'] =$customer_logindata['year'];
$context['month'] =$customer_logindata['month'];
$context['day'] =$customer_logindata['day'];

template_twig_files::template_load_front();
