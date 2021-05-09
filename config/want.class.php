<?php
namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

class want
{
    public static function want_button()
    {
        global $p_id, $active, $icon, $dbPostWantNum;
// postがある場合
        if (isset($_POST['postId'])) {
            $p_id = $_POST['postId'];

            try {
                $dbh = new \PDO('mysql:host=' . Bootstrap::DB_HOST . ';dbname=' . Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS);
                // wantテーブルから投稿IDとユーザーIDが一致したレコードを取得するSQL文
                $sql = 'SELECT * FROM want WHERE post_id = :p_id AND customer_id = :c_id';
                $data = array(':p_id' => $p_id, 'c_id' => $_SESSION['customer_id']);
                // クエリ実行
                $stmt = queryPost($dbh, $sql, $data);
                $resultCount = $stmt->rowCount();
                // レコードが1件でもある場合
                if (!empty($resultCount)) {
                    // レコードを削除する
                    $sql = 'DELETE FROM want WHERE post_id = :p_id AND customer_id = :c_id';
                    $data = array(':p_id' => $p_id, ':c_id' => $_SESSION['customer_id']);
                    // クエリ実行
                    $stmt = queryPost($dbh, $sql, $data);
                    echo count(getWant($p_id));
                } else {
                    // レコードを挿入する
                    $sql = 'INSERT INTO want (post_id, customer_id, created_date) VALUES (:p_id, :c_id, :date)';
                    $data = array(':p_id' => $p_id, ':c_id' => $_SESSION['customer_id'], ':date' => date('Y-m-d H:i:s'));
                    // クエリ実行
                    $stmt = queryPost($dbh, $sql, $data);
                    echo count(getWant($p_id));
                }
            } catch (\Exception $e) {
                error_log('エラー発生：' . $e->getMessage());
            }
        }

        $p_id = ''; //投稿ID
        $dbPostData = ''; //投稿内容
        $dbPostWantNum = ''; //いいねの数

// get送信がある場合
        if (!empty($_GET['p_id'])) {
            // 投稿IDのGETパラメータを取得
            $p_id = $_GET['p_id'];
            // DBから投稿データを取得
            $dbPostData = getPostData($p_id);
            // DBからいいねの数を取得
            $dbPostWantNum = count(getWant($p_id));
        }

        $active = (isset($_SESSION['customer_id'], $dbPostData['id'])) ? 'active' : '';

        $icon =
        (isset($_SESSION['customer_id'], $dbPostData['id'])) ?
        //いいね押したらハートが塗りつぶされる
        $icon = ' active fas' :
        //いいねを取り消したらハートのスタイルが取り消される
        $icon = ' far';

        $p_id = htmlspecialchars($p_id, ENT_QUOTES);
    }
}
