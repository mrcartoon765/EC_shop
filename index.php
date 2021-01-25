<?php

(preg_match('/portforio$/',dirname(__FILE__)))?
  require_once dirname(__FILE__) . '/../Bootstrap.class.php':
  require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

$context['greeting'] = 'ようこそHealth ';
$context['mazika'] = '祭祀の画面へ';
$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);