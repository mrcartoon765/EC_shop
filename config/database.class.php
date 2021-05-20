<?php


namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class database
{
    //DBへ接続する関数
    public static function dbh()
    {
        try {
            $dbh = new \PDO('mysql:host=' . Bootstrap::DB_HOST . ';dbname=' . Bootstrap::DB_NAME.';charsrt=utf8;', Bootstrap::DB_USER, Bootstrap::DB_PASS,);
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            exit;
        }
        return $dbh;
    }
    //指定したテーブルのデータを全て配列で取得しidを基準に配列にする関数
    public static function data_get($table)
    {
        $dbh = self::dbh();
        global $DB_DATA_GET;
        $stmt = $dbh->prepare("SELECT * FROM " . $table);
        $stmt->execute();
        $DB_DATA_GET = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        //idを配列番号にする処理
        $DB_DATA_GET = (array_column($DB_DATA_GET, null, 'id'));
    }
    //指定したテーブルからidを元にデータを取得する関数
    public static function get_detail_data($table, $id)
    {
        $dbh = self::dbh();
        global $detail_data;
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $detail_data = $stmt->fetchall(\PDO::FETCH_ASSOC);
        $detail_data = $detail_data[0];
        return $detail_data;
    }
    //複数のデータを１つの配列に多次元配列としてまとめて取得する関数
    public static function get_data_where($table,$where,$id)
    {
        $dbh = self::dbh();
        $sql = "SELECT * FROM " . $table . " WHERE ".$where." = " . $id;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $data_get_where = $stmt->fetchall(\PDO::FETCH_ASSOC);
        return $data_get_where;
    }
    //商品リストで使う関数
    public static function get_ctg_product($ctg1_or_ctg2, $ctg_id)
    {
        $dbh = self::dbh();
        global $ctg_product_data;
        $sql = "SELECT * FROM sub WHERE " . $ctg1_or_ctg2 . " = " . $ctg_id;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $ctg_product_data = $stmt->fetchall(\PDO::FETCH_ASSOC);
        return $ctg_product_data;
    }
    //副商材のカテゴリ名をctg_idの番号から取得する関数
    public static function get_ctg_name($ctg_no_search, $ctg_no = '1')
    {
        global $ctg_name;
        $ctg1_array = array('食品' => '1', 'サプリ' => '2', 'ガジェット' => '3', '家具・寝具' => '4', '美容品' => '5');
        $ctg2_array = array('ストレス対策' => '1', 'アンチエイジング' => '2', '集中力改善' => '3', '睡眠改善' => '4', 'ダイエット' => '5');
        if ($ctg_no == 1) {
            $ctg_name = array_search($ctg_no_search, $ctg1_array);
        } elseif ($ctg_no == 2) {
            $ctg_name = array_search($ctg_no_search, $ctg2_array);
        }
    }
    //データベースから画像とともにデータを削除する関数
    public static function db_delete($table)
    {
        error_reporting(512);
        $dbh = self::dbh();
        $id = $_POST['id'];
        $sql = "SELECT image FROM " . $table . " WHERE id=" . $id;
        $delete_file_name = $dbh->prepare($sql);
        $delete_file_name->execute();
        $delete_file_name = $delete_file_name->fetchAll(\PDO::FETCH_ASSOC);
        $delete_file_name = $delete_file_name[0]['image'];
        $empty = $GLOBALS['document_root'] . '/shopping/image/' . $table ."/". $delete_file_name;
        file_exists($empty)?
        unlink($empty):'';
        $stmt = $dbh->prepare("DELETE FROM " . $table . " WHERE id=:id");
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
    }
    //データベースのテーブルとカラムを指定して削除する場合の関数
    public static function delete_where($table,$where,$id)
    {
        $dbh = self::dbh();
        $sql = "DELETE FROM " . $table . " WHERE ".$where ."=".$id;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
    }
    //退会をする場合に使用する関数
    public static function customer_delete($mail,$password,$id)
    {
        if($mail == ''|$password==''||$id== ''){
        header('location:delete_customer.php');}

        $mail = isset($_POST['mail'])? htmlspecialchars($_POST['mail'], ENT_QUOTES, 'utf-8'): '';
        $password = isset($_POST['password'])? htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf-8'): '';
        $dbh = database::dbh();
        $stmt = $dbh->prepare("SELECT * FROM customer WHERE mail=:mail");
        $stmt->bindParam(':mail',$mail);
        $stmt->execute();

        $pass= $stmt->fetch();

        if(password_verify($password,$pass[2])){
            $count = $stmt->rowCount();
            if($count==0);
            $stmt = $dbh->prepare("DELETE FROM `customer` WHERE id = :id");
            $stmt->bindParam(':id',$pass['id']);
            $stmt->execute();
            $_SESSION = [];
            setcookie(session_name(), '', time() - 3600, "/");
            header('location:../../../customer/delete_customer_complete.php');
        }else{
            // $_SESSION['delete_false'] = '';
            $_SESSION['delete_false'] = true;
            header('location:../../../customer/delete_customer.php');
        }
    }
    //関連商品データを取得する関数
    public static function Related_Products_Get($table,$ctg,$search)
    {
        $dbh = self::dbh();
        $stmt = $dbh->prepare("SELECT * FROM ".$table." WHERE ".$ctg." =".$search);
        $stmt->execute();
        $ctg_product = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $ctg_product = array_column($ctg_product, null, 'id');
        return $ctg_product;
    }
    //データの数量を変更する際に使用する関数
    public static function data_num_update($table,$column,$update_data,$id,$id_no)
    {
    $dbh = self::dbh();
    $sql = "UPDATE `".$table."` SET ".$column." = ".$update_data. " WHERE ".$id."=".$id_no;
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    }
    //data_getでデータを全部取得した後idのランダムな値を取得する関数
    public static function id_no_random_get($array,$id)
    {
        $array = 
        array_rand(
                array_flip(
                array_merge(
                    array_column($array,$id)
                )
                )
            );
                return $array;
    }
}