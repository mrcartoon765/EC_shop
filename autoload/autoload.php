<?php 
/*
* ファイルパス：/Applicaitons/MAMP/htdocs/DT/autoload/index.php
* ファイル名：index.php
* アクセスURL：localhost8888:/DT/autoload/index.php
*/
class ClassLoader
{
  public static function loadClass($class)
  {
    require_once dirname(__FILE__) . '//' . $class . '.class.php';
    // require_onceでファイルを読み込みdirnameで(__FILE__)現在のファイルパスを取得
  }
}
// これを実行しないとオートローダーとして動かない
spl_autoload_register([
  'ClassLoader',
  'loadClass'
]);
$foo = new Foo();
$hoge = new Hoge();
// -------------------------------------------------------------------------------------
// //
// <?php
// /*
// * ファイルパス：/Applicaitons/MAMP/htdocs/DT/autoload/Foo.class.php
// * ファイル名：Foo.class.php
// */
// class Foo{
// public function __construct()
// {
// echo "Foo<br>";
// }
// }
// -------------------------------------------------------------------------------------
// <?php
// /*
// * ファイルパス：/Applicaitons/MAMP/htdocs/DT/autoload/Hoge.class.php
// * ファイル名：Hoge.class.php
// */
// class Hoge{
//   public function __construct()
//   {
//   echo "Hoge<br>";
//   }
// }