<?php

namespace config;

date_default_timezone_set('Asia/Tokyo');
require_once dirname(__FILE__) . '/../vendor/autoload.php';

global $filename, $this_dir, $document_root;

$document_root = $_SERVER['DOCUMENT_ROOT'];

$filename = basename(debug_backtrace()[0]['file'],'.php');

$this_dir_replace =
[
  $_SERVER['DOCUMENT_ROOT'] => "",
  $filename.".php" => ""
];

$this_dir =
strtr(debug_backtrace()[0]['file'],$this_dir_replace);

//定数Appdirへルートディレクトリのフルパス設定
define('AppDir',dirname(__DIR__) . '/');
//定数AppNameへアプリケーションAPP_URL名の設定 MAMPの場合は[0] ec2の場合は[4]
define('AppName', array_slice(explode("/",__DIR__),-2)[0]);
//定数ThisDirへ読み込み元のディレクトリの設定
if  ($this_dir !== AppName){
define('ThisDir',$this_dir);
} else {
  define('ThisDir','');
}
//定数AppUrlへドメイン名を代入
define('AppUrl', (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'].'/');

// $tempdir = $this_dir !== AppName ?
// $tempdir = Bootstrap::TEMPLATE_DIR:
// Bootstrap::ROOT_TEMP_DIR;



// 呼び出し元のファイル名を取得
// $fil = (basename(preg_replace('/.*?\//s'.$filename,'',str_replace($_SERVER['DOCUMENT_ROOT'].'/','',debug_backtrace()[0]["file"])),'.php'));


//DB_****に関しては随時変更

class Bootstrap
{
  const DB_HOST = 'mysql';
  const DB_NAME = 'BOOK_EC';
  const DB_USER = 'root';
  const DB_PASS = 'root';
  const DB_TYPE = 'mysql';
  const APP_NAME = AppName;
  const APP_DIR = AppDir;
  const ROOT_TEMP_DIR = self::APP_DIR . 'templates/' . ThisDir ;
  const TEMPLATE_DIR = self::APP_DIR . 'templates/' . ThisDir ;
  const CACHE_DIR = self::APP_DIR . 'templates_c/' . ThisDir ;
  const APP_URL = AppUrl;
  const ENTRY_URL = self::APP_URL . ThisDir;
  const CREATE_ACCOUNT = self::APP_URL . 'create_account/regist.php';
  const BOOK_IMAGE_DIR = self::ENTRY_URL . "/image/";
  const COMMON_TEMP = self::APP_DIR . "/templates/common";
  const HEADER_FILE = "common/header.html.twig";
  const ADMIN_HEADER_FILE = self::COMMON_TEMP . "/header_admin.html.twig";
  const FOOTER_FILE = self::COMMON_TEMP . "/footer.html.twig";

  public static function loadClass($class)
  {
    $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
    require_once $path;
}
}

spl_autoload_register([
  basename(__DIR__). '\Bootstrap',
  'loadClass'
]);

class account_DB
{
  public $db_con = null;
  public $db_host = '';
  public $db_user = '';
  public $db_pass = '';
  public $db_name = '';
  public function __construct($db_host, $db_user, $db_pass, $db_name)
  {
      $this->db_con = $this->connectDB($db_host, $db_user, $db_pass, $db_name);
      $this->db_host = $db_host;
      $this->db_user = $db_user;
      $this->db_pass = $db_pass;
      $this->db_name = $db_name;
  }
  private function connectDB($db_host, $db_user, $db_pass, $db_name)
  {
    $tmp_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
    if ($tmp_con !== false) {

        return $tmp_con;
    } else {

      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
    }
    public function execute($sql)
    {
      return mysqli_query($this->db_con, $sql);
      }
      public function select($sql)
      {
          $res = $this->execute($sql);
          $data = [];
          while ($row = mysqli_fetch_array($res)) {
              array_push($data, $row);
          }
          return $data;
      }
      public function quote($int)
      {
        return mysqli_real_escape_string($this->db_con, $int);
      }
      public function str_quote($str)
      {
        return "'" . mysqli_real_escape_string($this->db_con, $str) . "'";
      }
      public function getLastId()
      {
        return mysqli_insert_id($this->db_con);
      }
      public function close()
      {
        mysqli_close($this->db_con);
      }
    }

    class Book_Database
{
  private $dbh = null;
  private $db_host = '';
  private $db_user = '';
  private $db_pass = '';
  private $db_name = '';
  private $db_type = '';
  private $order = '';
  private $limit = '';
  private $offset = '';
  private $groupby = '';
  public function __construct($db_host, $db_user, $db_pass, $db_name, $db_type)
  {
    $this->dbh = $this->connectDB($db_host, $db_user, $db_pass, $db_name, $db_type);
    $this->db_host = $db_host;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_name = $db_name;
    $this->db_type = $db_type;
    $this->order = '';
    $this->limit = '';
    $this->offset = '';
    $this->groupby = '';
  }
  private function connectDB($db_host, $db_user, $db_pass, $db_name, $db_type)
  {
    try {
      switch ($db_type) {
        case 'mysql':
        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name;
        $dbh = new \PDO($dsn, $db_user, $db_pass);
        $dbh->query('SET NAMES utf8');
        break;
        case 'pgsql':
        $dsn = 'pgsql:dbname=' . $db_name . ' host=' . $db_host . ' port=5432';
        $dbh = new \PDO($dsn, $db_user, $db_pass);
        break;
      }
    } catch (\PDOException $e) {
      var_dump($e->getMessage());
      exit();
    }
    return $dbh;
  }
  public function setQuery($query = '', $arrVal = [])
  {
    $stmt = $this->dbh->prepare($query);
    $stmt->execute($arrVal);
  }
  public function select($table, $column = '', $where = '', $arrVal = [])
  {
    $sql = $this->getSql('select', $table, $where, $column);
    $this->sqlLogInfo($sql, $arrVal);
    $stmt = $this->dbh->prepare($sql);
    $res = $stmt->execute($arrVal);
    if ($res === false) {
      $this->catchError($stmt->errorInfo());
    }
    $data = [];
    while ($result = $stmt->fetch(\PDO::FETCH_ASSOC)) {
      array_push($data, $result);
    }
    return $data;
  }
  public function count($table, $where = '', $arrVal = [])
  {
    $sql = $this->getSql('count', $table, $where);
    $this->sqlLogInfo($sql, $arrVal);
    $stmt = $this->dbh->prepare($sql);
    $res = $stmt->execute($arrVal);
    if ($res === false) {
      $this->catchError($stmt->errorInfo());
    }
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    return intval($result['NUM']);
  }
  public function setOrder($order = '')
  {
    if ($strOrder !== '') {
      $this->order = ' ORDER BY ' . $strOrder;
    }
  }
  public function setLimitOff($limit = '', $offset = '')
  {
    if ($limit !== "") {
      $this->limit = " LIMIT " . $limit;
    }
    if ($offset !== "") {
      $this->offset = " OFFSET " . $offset;
    }
  }
  public function setGroupBy($groupby)
  {
    if ($groupby !== "") {
      $this->groupby = ' GROUP BY ' . $groupby;
    }
  }
  private function getSql($type,$table, $where = '', $column = '')
  {
    switch ($type) {
      case 'select':
        $columnKey = ($column !== '')? $column : "*";
        break;
        case 'count';
        $columnKey = 'COUNT(*) AS NUM';
        break;
        default:
        break;
    }
    $whereSQL = ($where !== '') ? ' WHERE ' . $where : '';
    $other = $this->groupby . " " . $this->order . " " . $this->limit . " " . $this->offset;
    $sql = " SELECT " . $columnKey . " FROM " . $table . $whereSQL .$other;
    return $sql;
  }
  public function insert($table, $insData = [])
  {
    $insDataKey = [];
    $insDataVal = [];
    $preCnt = [];
    $columns = '';
    $prest = '';
    foreach ($insData as $col => $val) {
      $insDataKey[] = $col;
      $insDataVal[] = $val;
      $preCnt[] = '?';
    }
    $columns = implode(",", $insDataKey);
    $preSt = implode(",", $preCnt);
    $sql = " INSERT INTO "
    . $table
    . "("
    . $columns
    . ") VALUES ("
    . $preSt
    . ") ";
    $this->sqlLogInfo($sql, $insDataVal);
    $stmt = $this->dbh->prepare($sql);
    $res = $stmt->execute($insDataVal);
    if ($res === false) {
      $this->catchError($stmt->errorInfo());
    }
    return $res;
    }
    public function update($table, $insData = [], $where, $arrWhereVal = [])
    {
      $arrPreSt = [];
      foreach ($insData as $col => $val) {
        $arrPreSt[] = $col . " =? ";
      }
      $preSt = implode(',',$arrPreSt);
      $sql = " UPDATE "
      . $table
      . " SET "
      . $preSt
      . " WHERE "
      . $where;
      $updateData = array_merge(array_values($insData), $arrWhereVal);
      $this->sqlLogInfo($sql, $updateData);
      $stmt = $this->dbh->prepare($sql);
      $res = $stmt->execute($updateData);
      if ($res === false) {
        $this->catchError($stmt->errorInfo());
      }
      return $res;
    }
    public function getLastId()
    {
      return $this->dbh->lastInsertId();
    }
  private function catchError($errArr = [])
  {
    $errMsg = (!empty($errArr[2]))? $errArr[2]:"";
    die("SQLエラーが発生しました。 " . $errArr[2]);
  }
  private function makeLogFile()
  {
    $logDir = dirname(__DIR__) . "/logs";
    if (!file_exists($logDir)) {
      mkdir($logDir, 777);
    }
    $logPath = $logDir . '/shopping.log';
    if(!file_exists($logPath)) {
      touch($logPath);
    }
    return $logPath;
  }
  private function sqlLogInfo($str, $arrVal = [])
  {
    $logPath = $this->makeLogFile();
    $logData = sprintf("[SQL_LOG:%s]: %s [%s]\n", date('Y-m-d H:i:s'), $str, implode(",", $arrVal));
    error_log($logData, 3, $logPath);
  }
}


$DB_BOOK_EC = "mysql:host=mysql;dbname=BOOK_EC";
$DB_BOOK_EC_USER = "root";
$DB_BOOK_EC_PASS = "root";


$context['APP_URL'] = Bootstrap::APP_URL;
$context['ENTRY_URL'] = Bootstrap::ENTRY_URL;
$context['ADMIN_HEADER'] = Bootstrap::ADMIN_HEADER_FILE;

class template_twig_files
{
  public static function Prepare_the_template()
  {
  global $loader,$twig;
  $loader = new \Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/templates");
  $twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);
  }
  public static function template_load_front()
  {
    $template = $GLOBALS['twig']->loadTemplate($GLOBALS['this_dir'].$GLOBALS['filename'].".html.twig");
    $template->display($GLOBALS['context']);
  }
}
class original_Mysql_command
{
  public static function customer_data_update($table)
  {
    foreach($_POST as $key => $value){
      $key_value[] = $key. ' = ' .'"'.$value.'"'.',';
  }
    $key_value = rtrim(implode($key_value), ',');
    $ses = $_SESSION['customer_id'];
    $sql = "UPDATE ".$table." SET ".$key_value." WHERE id =".$ses.';';
    return $sql;
  }
  public static function POST_DATA_INSERT($table)
  {
    foreach($_POST as $key => $value){
      $k[] = $key.', ';
      $v[] = '"'.$value.'", ';  // $v[] = $value;
    }
        $k = (rtrim(implode($k), ', '));
        $v = rtrim(implode($v), ', ');

        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
          // 成功;
          $file_name =  date('YmdHis')."_".$_FILES["image"]["name"];
          if (pathinfo($file_name, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file_name, PATHINFO_EXTENSION) == 'png') {
            // 拡張子チェックOK
            $tmp_name = $_FILES["image"]["tmp_name"];
            $document_root = $_SERVER['DOCUMENT_ROOT'];
            if (move_uploaded_file($tmp_name, $document_root."/shopping/image/".$table."/". $file_name)) {
              // "アップロード完了,画像保存先のディレクトリは、DBのテーブル名と同じとする"

              try{
                $dbh = new \PDO('mysql:host='.Bootstrap::DB_HOST.';dbname='.Bootstrap::DB_NAME,Bootstrap::DB_USER,Bootstrap::DB_PASS);
              }catch(\PDOException $e){
                var_dump($e->getMessage());
                exit;
              }
              $sql = "INSERT INTO $table ( image, ".$k." ) VALUES ( ".'"'.$file_name.'"'.", ".$v." );";
              $stmt = $dbh->prepare($sql);

                $stmt->execute();

                header( "refresh:3;url=".Bootstrap::ENTRY_URL.'books.php' );

                template_twig_files::Prepare_the_template();
                $context[''] = '';
                $template = $GLOBALS['twig']->loadTemplate($GLOBALS['this_dir'].$GLOBALS['filename']."complete.html.twig");
                $template->display($context);
            } else {
              echo "画像をアップロードできません。";
              exit;
            }

          } else {
            echo "ファイル形式はjpg/pngのみです";
            exit;
          }

        }else {
          echo "アップロードに失敗しました";
          exit;
        }
  }
}

class customer_login
{
  public static function login_session()
  {
      session_start();
      $login = isset($_SESSION['customer_login'])? $_SESSION['customer_login']:false;
      if($login == false){
        header("Location:" . Bootstrap::APP_URL . "/index.php");
        exit;
      }
      if($_SESSION['customer_id'] == ''){
        header("Location:" . Bootstrap::APP_URL . "/index.php");
        exit;
      }
      return $login;
  }
  public static function login_data()
  {
      $dbh = new \PDO('mysql:host='.Bootstrap::DB_HOST.';dbname='.Bootstrap::DB_NAME,Bootstrap::DB_USER,Bootstrap::DB_PASS);
      $stmt = $dbh->prepare("SELECT * FROM customer WHERE id=:id");
      $stmt->bindParam(":id",$_SESSION['customer_id']);
      $stmt->execute();
      $login_customer_data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $login_customer_data[0];
    }
}

class admin_login
  {
    public static function login_session()
    {
      session_start();
  if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;  template_twig_files::template_load_front();
  }}
 }

 class database
 {
  public static function data_get($table)
  {
  try{
    $dbh = new \PDO("mysql:host=".Bootstrap::DB_HOST.";dbname=".Bootstrap::DB_NAME,Bootstrap::DB_USER,Bootstrap::DB_PASS);
  }catch(\PDOException $e){
    var_dump($e->getMessage());
    exit;
  }
  global $DB_DATA_GET;
  $stmt = $dbh->prepare("SELECT * FROM ".$table);
  $stmt->execute();
  $DB_DATA_GET = $stmt->fetchAll(\PDO::FETCH_ASSOC);
}
  // public static function get_book_ctg($ctg_no)
  // {
  //   var_dump($GLOBALS('DB_DATA_GET'));
  //   return $ctg_no;
  // }
 }


class POST_GET
{
  public function GET($variable,$column)
  {
    $variable = isset($_POST[$column])? htmlspecialchars($_POST[column], ENT_QUOTES,'utf-8'):'';
  }
}
session_start();
$context['session'] = $_SESSION;
$context['login'] = $_SESSION["customer_login"];