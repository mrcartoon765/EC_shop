<?php

namespace create_account;
require_once dirname(__FILE__) . '/Bootstrap.class.php';
use create_account\lib\Database;
use create_account\Bootstrap;

$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);

if(isset($_GET['zip1']) === true && isset($_GET['zip2']) === true){
  //データがどちらも入っている場合
  $zip1 = $_GET['zip1'];
//
  $zip2 = $_GET['zip2'];
//
  $query = " SELECT "
  . " pref, "
  . " city, "
  . " town "
  . " FROM "
  . " postcode "
  . " WHERE "
  . " zip = ". $db->str_quote($zip1 . $zip2)
  // zipにzip1 とzip2を接続した値をエスケープ処理して代入 database.class.phpの56行目
  . " LIMIT 1 ";
  //データを1つだけ取得する
  $res = $db->select($query);
  // database.class.phpの42
  //出力結果がajaxに渡される
  echo ($res !== "" && count($res) !== 0) ? $res[0]['pref'] . $res[0]['city'] . $res[0]['town'] : '';
  //echoで出力するとcommon.jsの28 function(data)に入る
} else {
  echo "no";
}