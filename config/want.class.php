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
          // var_dump($data);
          // $wantStatus = 'active':
          // $wantStatus = '';
          // var_dump($wantStatus[0]['customer_id']);
          return $wantStatus[0];
         } catch (\Exception $e) {
                    error_log('エラー発生：' . $e->getMessage());
           }
        }
    }