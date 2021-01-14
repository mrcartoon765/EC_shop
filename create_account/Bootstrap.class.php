<?php 

namespace create_account;
require_once dirname(__FILE__).
'./../vendor/autoload.php';
class Bootstrap
{
  const DB_HOST = 'portforio-web-db.cvwcuk2bluvj.ap-northeast-1.rds.amazonaws.com';
  const DB_NAME = 'account_db';
  const DB_USER = 'carcecaotuent';
  const DB_PASS = 'cpraesastweord';
  const APP_DIR = '/var/www/html/portforio/';
  const TEMPLATE_DIR = self::APP_DIR . 'templates/create_account/';
  const CACHE_DIR = self::APP_DIR . 'templates_c/create_account/';
  const APP_URL = 'http://mrcartoon.work/portforio/';
  const ENTRY_URL = self::APP_URL . 'create_account/';
  public static function loadClass($class)
  {
    $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
    require_once $path;
  }
}
spl_autoload_register([
  'create_account\Bootstrap',
  'loadClass'
]);