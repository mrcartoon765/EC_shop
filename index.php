<?php

namespace Boost;
use Boost\db;

(preg_match('/portforio$/',dirname(__FILE__)))?
require_once dirname(__FILE__) . '/../Bootstrap.class.php':
require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

$context['greeting'] = 'ようこそHealthKnowledgeへ！';
$context['titlesub2'] = 'ここでは健康に関する知識を網羅できる本の購入が出来ます';
$context['kigo'] = '寒いのでこのような知識は如何ですか？';



$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);