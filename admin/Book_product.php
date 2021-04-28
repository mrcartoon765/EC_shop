<?php

namespace config;

use mysqli;
use PDOException;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem($document_root."/templates");

$twig = new \Twig_Environment($loader, ['cache' => Bootstrap::CACHE_DIR, 'auto_reload' => TRUE]);

session_start();

  if($_SESSION['admin_login'] == false){
    header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
    exit;
  }
    $Book_title = isset($_POST['title'])? htmlspecialchars($_POST['title'],ENT_QUOTES, 'utf-8'):'';
    $Book_detail = isset($_POST['detail'])? htmlspecialchars($_POST['detail'],ENT_QUOTES, 'utf-8'):'';
    $Book_detail = nl2br($Book_detail);
    $Book_price = isset($_POST['price'])? htmlspecialchars($_POST['price'],ENT_QUOTES, 'utf-8'):'';
    $Book_date = isset($_POST['date'])? htmlspecialchars($_POST['date'],ENT_QUOTES, 'utf-8'):'';
    $Book_ctg_id = isset($_POST['ctg_id'])? htmlspecialchars($_POST['ctg_id'],ENT_QUOTES, 'utf-8'):'';

    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
      // 成功;

      $Book_file_name =  date('YmdHis')."_".$_FILES["image"]["name"];
      if (pathinfo($Book_file_name, PATHINFO_EXTENSION) == 'jpg' || pathinfo($Book_file_name, PATHINFO_EXTENSION) == 'png') {
        // 拡張子チェックOK
        $Book_tmp_name = $_FILES["image"]["tmp_name"];
        if (move_uploaded_file($Book_tmp_name, "../shopping/image/" . $Book_file_name)) {
          // "アップロード完了"

          try{
            $dbh = new \PDO($DB_BOOK_EC,"root","root");
          }catch(\PDOException $e){
            var_dump($e->getMessage());
            exit;
          }

          $stmt = $dbh->prepare("INSERT INTO Book(
            title, detail, price, image, date,
            ctg_id
            ) VALUES ( :title, :detail, :price, :image, :date, :ctg_id)");
            $stmt->bindParam(':title',$Book_title);
            $stmt->bindParam(':detail',$Book_detail);
            $stmt->bindParam(':price',$Book_price);
            $stmt->bindParam(':image',$Book_file_name);
            $stmt->bindParam(':date',$Book_date);
            $stmt->bindParam(':ctg_id',$Book_ctg_id);
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