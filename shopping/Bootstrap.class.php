<?php 

namespace shopping;
date_default_timezone_get('Asia/Tokyo');
require_once dirname(__FILE__) . './../vendor/autoload.php';

class Bootstrap
{
  const DB_HOST = 'localhost';
  const DB_NAME = 'BOOK_EC';
  const DB_USER = 'root';
  const DB_PASS = 'root';
  const DB_TYPE = 'mysql';
  const APP_DIR = '/Applications/MAMP/htdocs/portforio';
  const TEMPLATE_DIR = self::APP_DIR . 'templates/shopping/';
  const CACHE_DIR = false;
  const APP_URL = 'http://localhost:8888/';
  const ENTRY_URL = self::APP_URL . 'shoppiing/';
  
  public static function loadClass($class)
  {
    $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
    require_once $path;
}
}

spl_autoload_register([
  'shopping\Bootstrap',
  'loadclass'
]);
