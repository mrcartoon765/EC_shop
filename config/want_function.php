<?php
namespace config;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";
// class want
// {
    // public static function want_button(){
// postがある場合
        if (isset($_POST['product_id']) && isset($_POST['table_name'])) {
            $product_id = $_POST['product_id'];
            $table = $_POST['table_name'];
            $customer_id = $_SESSION['customer_id'];

            try {
              $dbh = database::dbh();
                // wantテーブルから商品IDとユーザーIDが一致したレコードを取得するSQL文
                $sql = 'SELECT * FROM `want` WHERE customer_id = :c_id AND table_name = :t_n AND product_id = :p_i';
                $data = array(':c_id' => $customer_id,':t_n' => $table, ':p_i' => $product_id);
                // クエリ実行
                $stmt = $dbh->prepare($sql);
                $stmt->execute($data);
                $resultCount = $stmt->fetch();
                // レコードが1件でもある場合
                if (!empty($resultCount)) {
                    // レコードを削除する
                    $sql = 'DELETE FROM `want`  WHERE customer_id = :c_id AND table_name = :t_n AND product_id = :p_i';
                    $data = array('c_id' => $_SESSION['customer_id'],':t_n' => $table, ':p_i' => $product_id);
                    // クエリ実行
                    $stmt = $dbh->prepare($sql);
                    $stmt->execute($data);
                    $data_get_where = database::get_data_where('want','product_id',$p);
                } else {
                    // レコードを挿入する
                    $sql = 'INSERT INTO `want` ( customer_id, table_name, product_id, created_date ) VALUES ( :c_id, :t_n, :p_i, :date )';
                    $data = array(':c_id' => $customer_id, ':t_n' => $table, ':p_i' => $product_id, ':date' => date('Y-m-d H:i:s'));
                //     // クエリ実行
                    $stmt = $dbh->prepare($sql);
                    $stmt = $stmt->execute($data);
                }
            } catch (\Exception $e) {
                error_log('エラー発生：' . $e->getMessage());
            }
        }
        $want_name = ''; //欲しい商品名
        $dbWantData = ''; //投稿内容
        $dbWantNum = ''; //いいねの数
// get送信がある場合
        if (!empty($_GET['want'])) {
            // 投稿IDのGETパラメータを取得
            $want_name = $_GET['want'];
            exit;
            // DBから投稿データを取得
            $dbWantData = want::getWant($_POST[]);
            var_dump($dbWantData);
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

//     }
// }