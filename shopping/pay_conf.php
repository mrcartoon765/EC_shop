<?php

namespace config;

use config\template_twig_files;

use shopping\lib\book;
use shopping\lib\shopping_Session;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$db = new book_Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);
$ses = new shopping_Session($db);
$book = new book($db);

template_twig_files::Prepare_the_template();

session_start();
session_regenerate_id(true);

$family_name = POST_GET::GET('$family_name','family_name');
$first_name = POST_GET::GET('$first_name','first_name');
$mail = POST_GET::GET('$mail','mail');
$tel1 = POST_GET::GET('$tel1','tel1');
$tel2 = POST_GET::GET('$tel2','tel2');
$tel3 = POST_GET::GET('$tel3','tel3');
$zip1 = POST_GET::GET('$zip1','zip1');
$zip2 = POST_GET::GET('$zip2','zip2');
$address = POST_GET::GET('$address','address');
$payjp_token = POST_GET::GET('$payjp_token','payjp_token');

$context['family_name']=$family_name;
$context['first_name']=$first_name;
$context['mail']=$mail;
$context['tel1']=$tel1;
$context['tel2']=$tel2;
$context['tel3']=$tel3;
$context['zip1']=$zip1;
$context['zip2']=$zip2;
$context['address']=$address;
$context['payjp_token']=$payjp_token;

template_twig_files::template_load_front();
