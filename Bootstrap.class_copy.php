<?php

date_default_timezone_set('Asia/Tokyo');
require_once dirname(__FILE__).'/portforio/vendor/autoload.php';

//debug_backtraceを使ってディレクトリ名の取得

$Bost_file_dir = debug_backtrace();
$Bost_name = explode('/',$Bost_file_dir[0]["file"]);
$CLASS_DIR = strval(array_slice($Bost_name,-2,1)[0]);
$CLASS_DIR = $CLASS_DIR == 'portforio' ? define('CLASS_DIR', null) : define('CLASS_DIR',$CLASS_DIR);

class Bootstrap
{
  const DB_HOST = 'localhost';
  const DB_NAME = 'Health_Book';
  const DB_USER = 'root';
  const DB_PASS = 'root';
  const DB_TYPE = 'mysql';
  const APP_DIR = '/Applications/MAMP/htdocs/portforio/';
  const TEMPLATE_DIR = self::APP_DIR . 'templates/' . CLASS_DIR ;
  const CACHE_DIR = self::APP_DIR . 'templates_c/' . CLASS_DIR ;
  const APP_URL = 'http://localhost:8888/';
  const ENTRY_URL = self::APP_URL . CLASS_DIR . '/';
  public static function loadClass($class)
  {
    $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
    require_once $path;
  }
}
// if (CLASS_DIR == 'portforio'){
spl_autoload_register([
  'Bootstrap',
  'loadClass']);
// ]);
// }else{
//   spl_autoload_register([
//     CLASS_DIR . 'Bootstrap',
//     'loadClass'
//   ]);}

class maro
{
  public static function inu()
  {
    echo "まろ";
  }
}

