<?php

namespace config;

use Laravel\Ui\Presets\Bootstrap;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

$this_dir === $app_name ?
require_once dirname(__FILE__) .'/config/Bootstrap.class.php':
require_once strstr(__FILE__, $this_dir,true) . 'config/Bootstrap.class.php';

session_start();

if($_SESSION['admin_login'] == false){
  header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
  exit;
}

$book_id = isset($_POST['book_id'])? htmlspecialchars($_POST['book_id'], ENT_QUOTES, 'utf-8'):'';
$title = isset($_POST['title'])? htmlspecialchars($_POST['title'], ENT_QUOTES, 'utf-8'):'';
$detail = isset($_POST['detail'])? htmlspecialchars($_POST['detail'], ENT_QUOTES, 'utf-8'):'';
$price  = isset($_POST['price'])? htmlspecialchars($_POST['price'], ENT_QUOTES, 'utf-8'):'';
$date   = isset($_POST['date'])? htmlspecialchars($_POST['date'], ENT_QUOTES, 'utf-8'):'';
$ctg_id = isset($_POST['ctg_id'])? htmlspecialchars($_POST['ctg_id'], ENT_QUOTES, 'utf-8'):'';


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
      $Book_file_name = htmlspecialchars($Book_file_name);

      //画像更新の前に古い画像データの削除
      $old_Book_image_file = $dbh->query("SELECT image FROM Book WHERE Book.book_id=$book_id");
      $old_Book_image_file = $old_Book_image_file->fetch()['image'];
      $Book_image_dir = '../shopping/image/';

      file_exists($Book_image_dir.$old_Book_image_file)?
      unlink($Book_image_dir.$old_Book_image_file):
      '';


      $stmt = $dbh->prepare("UPDATE Book SET title=:title, detail=:detail, price=:price, image=:image, date=:date, ctg_id=:ctg_id WHERE Book.book_id=:book_id");
       $stmt->bindParam(":title",$title);
       $stmt->bindParam(":detail",$detail);
       $stmt->bindParam(":price",$price);
       $stmt->bindParam(":image",$Book_file_name);
       $stmt->bindParam(":date",$date);
       $stmt->bindParam(":ctg_id",$ctg_id);
       $stmt->bindParam(":book_id",$book_id);
       $stmt->execute();

        header('location:./Books.php');

    } else {
      echo "画像をアップロードできません。";
      exit;
    }

  } else {
    echo "ファイル形式はjpg/pngのみです";
    exit;
  }
 
} else {
  echo "アップロードに失敗しました";
  exit;
}



try{
    $dbh = new \PDO($DB_BOOK_EC,"root","root");
}catch(\PDOException $e){
    var_dump($e->getMessage());
    exit;
}

header("location:" . Bootstrap::ENTRY_URL . "/books.php");