<?php

namespace create_account\lib;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];


$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';
use config\Bootstrap;

$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);

if(isset($_GET['zip1']) === true && isset($_GET['zip2']) === true){
  $zip1 = $_GET['zip1'];
  $zip2 = $_GET['zip2'];
  $query = " SELECT "
  . " pref, "
  . " city, "
  . " town "
  . " FROM "
  . " postcode "
  . " WHERE "
  . " zip = ". $db->str_quote($zip1 . $zip2)
  . " LIMIT 1 ";
  $res = $db->select($query);
  echo ($res !== "" && count($res) !== 0) ? $res[0]['pref'] . $res[0]['city'] . $res[0]['town'] : '';
} else {
  echo "no";
}