<?php
namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

class want
{
    public static function want_button()
    {
        global $want_name, $active, $icon, $dbWantNum;
// postがある場合
        if (isset($_POST['want_name'])) {
            $want_name = $_POST['want_name'];

            try {
              $dbh = database::dbh();
                // wantテーブルから投稿IDとユーザーIDが一致したレコードを取得するSQL文
                $sql = 'SELECT * FROM `want` WHERE want_name = :w_n AND customer_id = :c_id';
                $data = array(':w_n' => $want_name, 'c_id' => $_SESSION['customer_id']);
                // クエリ実行
                $stmt = queryPost($dbh, $sql, $data);
                $resultCount = $stmt->rowCount();
                // レコードが1件でもある場合
                if (!empty($resultCount)) {
                    // レコードを削除する
                    $sql = 'DELETE FROM `want` WHERE want_name = :w_n AND customer_id = :c_id';
                    $data = array(':w_n' => $want_name, ':c_id' => $_SESSION['customer_id']);
                    // クエリ実行
                    $stmt = queryPost($dbh, $sql, $data);
                    echo count(getWant($want_name));
                } else {
                    // レコードを挿入する
                    exit;
                    $sql = 'INSERT INTO `want` (want_name, customer_id, created_date) VALUES (:w_n, :c_id, :date)';
                    $data = array(':w_n' => $want_name, ':c_id' => $_SESSION['customer_id'], ':date' => date('Y-m-d H:i:s'));
                    // クエリ実行
                    $stmt = queryPost($dbh, $sql, $data);
                    var_dum(count(getWant($want_name)));
                }
            } catch (\Exception $e) {
                error_log('エラー発生：' . $e->getMessage());
            }
        }

        $want_name = ''; //欲しい商品名
        $dbWantData = ''; //投稿内容
        $dbWantNum = ''; //いいねの数

// get送信がある場合
        if (!empty($_GET['want_name'])) {
            // 投稿IDのGETパラメータを取得
            $want_name = $_GET['want_name'];
            // DBから投稿データを取得
            $dbWantData = getWantData($want_name);
            // DBからいいねの数を取得
            $dbPostWantNum = count(getWant($want_name));
        }

        $active = (isset($_SESSION['customer_id'], $dbWantData['customer_id'])) ? 'active' : '';

        $icon =
        (isset($_SESSION['customer_id'], $dbPostData['id'])) ?
        //いいね押したらハートが塗りつぶされる
        $icon = ' active fas' :
        //いいねを取り消したらハートのスタイルが取り消される
        $icon = ' far';

        htmlspecialchars($want_name);

    }
}