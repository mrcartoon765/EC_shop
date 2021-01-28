<?php
namespace db;
(preg_match('/portforio$/',dirname(__FILE__)))?
  require_once dirname(__FILE__) . '/../Bootstrap.class.php':
  require_once dirname(__FILE__) . '/../../Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader);

$context['create_message'] = '会員登録の手順を進めますので、ご登録されるメールアドレスをご入力ください';

$template = $twig->loadTemplate((pathinfo(__FILE__)["filename"]).'.html.twig');
$template->display($context);