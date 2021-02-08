<?php

namespace Boost;
use Boost\db;

(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

$context['greeting'] = 'ようこそHealthKnowledgeへ！';
$context['titlesub2'] = 'パレオな男の本のご紹介と関連した商品の購入が出来ます';


$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);