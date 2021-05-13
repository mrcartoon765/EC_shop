<?php


namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class database
{
    public static function dbh()
    {
        try {
            $dbh = new \PDO('mysql:host=' . Bootstrap::DB_HOST . ';dbname=' . Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS);
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            exit;
        }
        return $dbh;
    }
    public static function data_get($table)
    {
        $dbh = self::dbh();
        global $DB_DATA_GET;
        $stmt = $dbh->prepare("SELECT * FROM " . $table);
        $stmt->execute();
        $DB_DATA_GET = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public static function get_detail_data($table, $id)
    {
        $dbh = self::dbh();
        global $detail_data;
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $detail_data = $stmt->fetchall(\PDO::FETCH_ASSOC);
    }
    public static function get_ctg_product($ctg1_or_ctg2, $ctg_id)
    {
        $dbh = self::dbh();
        global $ctg_product_data;
        $sql = "SELECT * FROM sub WHERE " . $ctg1_or_ctg2 . " = " . $ctg_id;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $ctg_product_data = $stmt->fetchall(\PDO::FETCH_ASSOC);
    }
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
    public static function db_delete($table)
    {
        $dbh = self::dbh();
        $id = $_POST['id'];
        $sql = "SELECT image FROM " . $table . " WHERE id=" . $id;
        $delete_file_name = $dbh->prepare($sql);
        $delete_file_name->execute();
        $delete_file_name = $delete_file_name->fetchAll(\PDO::FETCH_ASSOC);
        $delete_file_name = $delete_file_name[0]['image'];
        $empty = $GLOBALS['document_root'] . '/shopping/image/' . $table . "/" . $delete_file_name;
        file_exists($empty)?
        unlink($empty):'';
        $stmt = $dbh->prepare("DELETE FROM " . $table . " WHERE id=:id");
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
    }
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
            echo 'db検索失敗';
            // $_POST['delete_false'] = ;
            // header('location:../../../customer/delete_customer.php');
        }
    }
}