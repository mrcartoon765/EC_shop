<?php

namespace config;

use config\template_twig_files;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

$eye_image = 'eye/'.array_rand(range(0, 19)).'.png';

$eye_search = range(0, 19);

$cnt = 20;// 取得数
$keys = array_keys($eye_search);
shuffle($keys);
for ($i=0;$i<$cnt;$i++ ) {
  $eye_files[$i] = 'eye/'.$eye_search[$keys[$i]].'.png';
}

$context['eye'] = $eye_image;
$context['eye_f'] = $eye_files;

template_twig_files::template_load_front();