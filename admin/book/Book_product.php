<?php

namespace config;

use config\template_twig_files;

use mysqli;
use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

    // $Book_title = isset($_POST['title'])? htmlspecialchars($_POST['title'],ENT_QUOTES, 'utf-8'):'';
    // $Book_detail = isset($_POST['detail'])? htmlspecialchars($_POST['detail'],ENT_QUOTES, 'utf-8'):'';
    // $Book_detail = nl2br($Book_detail);
    // $Book_price = isset($_POST['price'])? htmlspecialchars($_POST['price'],ENT_QUOTES, 'utf-8'):'';
    // $Book_date = isset($_POST['date'])? htmlspecialchars($_POST['date'],ENT_QUOTES, 'utf-8'):'';
    // $Book_ctg_id = isset($_POST['ctg_id'])? htmlspecialchars($_POST['ctg_id'],ENT_QUOTES, 'utf-8'):'';

    admin_login::login_session();

foreach($_POST as $key => $value){
  $k[] = $key.', ';
  $v[] = $value.', ';  // $v[] = $value;
}
    $k = (rtrim(implode($k), ', '));
    $v = rtrim(implode($v), ', ');
  // var_dump($k);
  // var_dump($v);


    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
      // 成功;

      $file_name =  date('YmdHis')."_".$_FILES["image"]["name"];
      if (pathinfo($file_name, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file_name, PATHINFO_EXTENSION) == 'png') {
        // 拡張子チェックOK
        $tmp_name = $_FILES["image"]["tmp_name"];
        if (move_uploaded_file($tmp_name, $document_root."/shopping/image/". $file_name)) {
          // "アップロード完了"

          try{
            $dbh = new \PDO('mysql:host='.Bootstrap::DB_HOST.';dbname='.Bootstrap::DB_NAME,Bootstrap::DB_USER,Bootstrap::DB_PASS);
          }catch(\PDOException $e){
            var_dump($e->getMessage());
            exit;
          }
          $sql = "INSERT INTO image, ".$k.") VALUES (".$file_name.", ".$v.");";
          // var_dump($sql);
          $stmt = $dbh->prepare($sql);

            // $stmt->bindParam(':title',$Book_title);
            // $stmt->bindParam(':detail',$Book_detail);
            // $stmt->bindParam(':price',$Book_price);
            // $stmt->bindParam(':image',$Book_file_name);
            // $stmt->bindParam(':date',$Book_date);
            // $stmt->bindParam(':ctg_id',$Book_ctg_id);
            $stmt->execute();

            // echo "登録完了";

            header('location:./Books.php');

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