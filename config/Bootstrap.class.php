<?php

namespace config;

date_default_timezone_set('Asia/Tokyo');
require_once dirname(__FILE__) . '/../vendor/autoload.php';

define('AppDir',dirname(__DIR__) . '/');
define('DisDir',$this_dir);
var_dump(AppDir);

class Bootstrap
{
  const DB_HOST = 'localhost';
  const DB_NAME = 'BOOK_EC';
  const DB_USER = 'root';
  const DB_PASS = 'root';
  const DB_TYPE = 'mysql';
  const APP_DIR = AppDir;
  const TEMPLATE_DIR = self::APP_DIR . 'templates/' . DisDir . '/';
  const CACHE_DIR = self::APP_DIR . 'templates_c/' . DisDir . '/';
  const APP_URL = 'http://localhost:8888';
  const ENTRY_URL = self::APP_URL . DisDir . '/';

  public static function loadClass($class)
  {
    $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
    require_once $path;
}
}

spl_autoload_register([
  basename(__DIR__) . '\Bootstrap',
  'loadClass'
]);