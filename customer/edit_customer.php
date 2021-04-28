<?php

namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

$loader = new \Twig_Loader_Filesystem($document_root."/templates");

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => true]);

use config\customer_login;
use create_account\master\initMaster;

customer_login::login_session();

$customer_logindata = customer_login::login_data();

var_dump($_SESSION);

list($yearArr, $monthArr, $dayArr) = initMaster::getDate();

$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['dataArr'] = $dataArr;
$context['errArr'] = $errArr;
$context['customer'] = $customer_logindata;

$template = $twig->loadTemplate($this_dir.$filename.".html.twig");
$template->display($context);
