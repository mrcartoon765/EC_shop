<?php 

namespace item;
date_default_timezone_set('Asia/Tokyo');
require_once dirname(__FILE__).
'./../vendor/autoload.php';
class Bootstrap
{
  const DB_HOST = 'database-1.cvwcuk2bluvj.ap-northeast-1.rds.amazonaws.com';
  const DB_NAME = 'shopping_db';
  const DB_USER = 'sahcocpopuinntg';
  const DB_PASS = 'sphaospspwionrg';
  const DB_TYPE = 'mysql';
  const APP_DIR = '/var/www/html/portforio/';
  const TEMPLATE_DIR = self::APP_DIR . 'templates/item/';
  const CACHE_DIR = self::APP_DIR . 'templates_c/item/';
  const APP_URL = 'http://mrcartoon.work/';
  const ENTRY_URL = self::APP_URL . 'item/';
  public static function loadClass($class)
  {
    $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
    require_once $path;
  }
}
spl_autoload_register([
    'item\Bootstrap',
    'loadClass'
]);