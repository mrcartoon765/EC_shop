<?php

namespace config;

use Contact\lib\error_check;

$this_dir = basename(__DIR__);

$this_dir === "ec_shop2" ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($tempdir);

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

$name = isset($_POST['name'])?
  htmlspecialchars($_POST['name'],ENT_QUOTES, 'utf-8')
  :'';

$email = isset($_POST['email'])?
  htmlspecialchars($_POST['email'],ENT_QUOTES, 'utf-8')
  :'';
$text = isset($_POST['text'])?
  htmlspecialchars($_POST['text'],ENT_QUOTES, 'utf-8')
  :'';

  $context['name'] = $name;
  $context['email'] = $email;
  $context['text'] = $text;

$filename = basename(__FILE__,'.php');
$template = $twig->loadTemplate($filename . '.html.twig');
$template->display($context);