<?php

require_once '/Applications/MAMP/htdocs/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader,['cahce' => Bootstrap]);

$context['greeting'] = 'ようこそ！！！';
$context['mazika'] = 'mazika!!!!!!!!!';
$template = $twig->loadTemplate('index.html.twig');
$template->display($context);