<?php

namespace Boost;

(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

session_start();

header("Content-type: text/html; charset=utf-8");


// クロスサイトリクエスフォージュエリ(CSRF)対策
$_SESSION['token'] = base64_decode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];

// クリックジャギング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

$context = [];
$context ['Registration']= 'メール登録画面';
$context['token'] = $token;

$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);