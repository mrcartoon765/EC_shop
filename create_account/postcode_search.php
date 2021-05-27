<?php

namespace config;

use config\template_twig_files;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

if(isset($_GET['zip1']) === true && isset($_GET['zip2']) === true){
  $zip1 = $_GET['zip1'];
  $zip2 = $_GET['zip2'];
  $res = database::get_data_where('postcode','zip',$zip1.$zip2);
  echo ($res !== "" && count($res) !== 0) ? $res[0]['pref'] . $res[0]['city'] . $res[0]['town'] : '';
} else {
  echo "no";
}