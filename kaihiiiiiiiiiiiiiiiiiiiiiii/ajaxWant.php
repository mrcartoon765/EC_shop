<?php
namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

// postがある場合
if(isset($_POST['postId'])){
    $p_id = $_POST['postId'];

    try{
        $dbh = database::dbh();
        // goodテーブルから投稿IDとユーザーIDが一致したレコードを取得するSQL文
        $sql = 'SELECT * FROM want WHERE post_id = :p_id AND customer_id = :c_id';
        $data = array(':p_id' => $p_id, 'u_id' => $_SESSION['customer_id']);
        // クエリ実行
        $stmt = queryPost($dbh, $sql, $data);
        $resultCount = $stmt->rowCount();
        // レコードが1件でもある場合
        if(!empty($resultCount)){
            // レコードを削除する
            $sql = 'DELETE FROM want WHERE post_id = :p_id AND customer_id = :c_id';
            $data = array(':p_id' => $p_id, ':c_id' => $_SESSION['customer_id']);
            // クエリ実行
            $stmt = queryPost($dbh, $sql, $data);
            echo count(getWant($p_id));
        }else{
            // レコードを挿入する
            $sql = 'INSERT INTO want (post_id, customer_id, created_date) VALUES (:p_id, :c_id, :date)';
            $data = array(':p_id' => $p_id, ':c_id' => $_SESSION['customer_id'], ':date' => date('Y-m-d H:i:s'));
            // クエリ実行
            $stmt = queryPost($dbh, $sql, $data);
            echo count(getWant($p_id));
        }
    }catch(\Exception $e){
        error_log('エラー発生：'.$e->getMessage());
    }
}