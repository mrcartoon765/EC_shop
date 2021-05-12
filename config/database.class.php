<?php


namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class database
{
    public static function dbh()
    {
        try {
            global $dbh;
            $dbh = new \PDO('mysql:host=' . Bootstrap::DB_HOST . ';dbname=' . Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS);
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            exit;
        }
    }
    public static function data_get($table)
    {
        self::dbh();
        global $DB_DATA_GET;
        $stmt = $GLOBALS['dbh']->prepare("SELECT * FROM " . $table);
        $stmt->execute();
        $DB_DATA_GET = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public static function get_detail_data($table, $id)
    {
        self::dbh();
        global $detail_data;
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $stmt = $GLOBALS['dbh']->prepare($sql);
        $stmt->execute();
        $detail_data = $stmt->fetchall(\PDO::FETCH_ASSOC);
    }
    public static function get_ctg_product($ctg1_or_ctg2, $ctg_id)
    {
        self::dbh();
        global $ctg_product_data;
        $sql = "SELECT * FROM sub WHERE " . $ctg1_or_ctg2 . " = " . $ctg_id;
        $stmt = $GLOBALS['dbh']->prepare($sql);
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
        self::dbh();
        $id = $_POST['id'];
        $sql = "SELECT image FROM " . $table . " WHERE id=" . $id;
        $delete_file_name = $GLOBALS['dbh']->prepare($sql);
        $delete_file_name->execute();
        $delete_file_name = $delete_file_name->fetchAll(\PDO::FETCH_ASSOC);
        $delete_file_name = $delete_file_name[0]['image'];
        $empty = $GLOBALS['document_root'] . '/shopping/image/' . $table . "/" . $delete_file_name;
        file_exists($empty)?
        unlink($empty):'';
        $stmt = $GLOBALS['dbh']->prepare("DELETE FROM " . $table . " WHERE id=:id");
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
    }
}