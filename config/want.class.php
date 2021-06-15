<?php
namespace config;

use Exception;

$this_dir = basename(__DIR__);

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";
class want
{
  public static function getWant($table,$product_id){
    //wantの総数の取得
    try{
        $table = $_POST['table_name'];
      $dbh = database::dbh();
      $sql = 'SELECT * FROM `want` WHERE table_name = :t_n AND product_id = :p_i';
      $data = array(':t_n' => $table, ':p_i' => $product_id);
      // クエリ実行
      $stmt = $dbh->prepare($sql);
      $stmt->execute($data);
      $resultCount = count($stmt->fetchAll());
      return $resultCount;
     } catch (\Exception $e) {
                error_log('エラー発生：' . $e->getMessage());
       }
    }
       public static function getWantStatus($customer_id,$table,$product_id){
        //want済みかそうでないかの判定
        try{
          $dbh = database::dbh();
          $sql = 'SELECT * FROM `want` WHERE customer_id = :c_id AND table_name = :t_n AND product_id = :p_i';
          $data = array(':c_id' => $customer_id, ':t_n' => $table, ':p_i' => $product_id);
          // クエリ実行
          $stmt = $dbh->prepare($sql);
          $stmt->execute($data);
          $wantStatus = $stmt->fetchAll();
          return $wantStatus[0];
         } catch (\Exception $e) {
                    error_log('エラー発生：' . $e->getMessage());
           }
        }
        public static function get_db_want_products()//欲しい済みの商品をデータベースから取得し降順(最新順)に並べ替える処理
        {
          $want_list = database::get_data_where('want','customer_id',$_SESSION['customer_id']);
          foreach ($want_list as $key => $value){
            $id[$key] = $value['created_date'];
          }
          array_multisort($id, SORT_DESC, $want_list);
          return $want_list;
        }
        public static function want_list_delete()//欲しいリストの商品を削除する処理
        {
          if (isset($_POST['id']) && ($_POST['delete'] == 'YES' )){
            database::delete_where('want','id',$_POST['id']);
            unset($_POST['id'],$_POST['delete']);
            header('Location:./want_list.php');
          }
        }
    }