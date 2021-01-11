<?php 

class ClassLoader
{
    public static function loadClass($class)
    {

        require_once dirname(__FILE__) . '/' . $class . '.class.php';
        //dirname現在の絶対パスを取得するという関数
        //現在のパス.$classに入ってる名、.class.phpを読み込む
    }
}


spl_autoload_register([

  'ClassLoader',

  'loadClass'

]);

$foo = new Foo();
$hoge = new Hoge();