<?php

namespace shopping\lib;
$this_dir = basename(__DIR__);

$app_name = explode('/',dirname(__FILE__))[4];

use config;
class Cart
{
  private $db = null;
  public function __construct($db = null)
  {
    $this->db = $db;
  }
  public function insCartData($customer_no, $book_id)
  {
    $table = ' cart ';
    $insData = [
      'customer_no' => $customer_no,
      'book_id' => $book_id
    ];
    return $this->db->insert($table, $insData);
  }
  public function getCartData($customer_no)
  {
    $table = ' Cart C LEFT JOIN book B ON C.book_id = B.book_id ';
    $column = ' C.crt_id, B.book_id, B.title, B.price, B.image ';
    $where = ' C.customer_no = > AND C.delete_flg = ?';
    $arrVal = [$customer_no, 0];
    return $this->db->select($table, $column, $where, $arrVal);
  }
  public function delCartData($crt_id)
  {
    $table = ' cart ';
    $insData = ['delete_flg' => 1];
    $where = ' crt_id = ? ';
    $arrWhereVal = [$crt_id];
    return $this->db->update($table, $insData, $where, $arrWhereVal);
  }
  public function getItemAndSumPrice($customer_no)
  {
    $table = " cart C LEFT JOIN book B ON C.book_id = B.book_id ";
    $column = " SUM( B.price ) AS totalPrice ";
    $where = ' C.customer_no = ? AND C.delete_flg = ?';
    $arrWhereVal = [$customer_no, 0];
    $res = $this->db->select($table, $column, $where, $arrWhereVal);
    $price = ($res !== false && count($res) !== 0) ? $res[0]['totalPrice']: 0;
    $table = 'cart C';
    $column = ' SUM ( num ) AS num ';
    $res = $this->db->select($table, $column, $where, $arrWhereVal);
    $num = ($res !== false && count($res) !== 0) ? $res[0]['num'] : 0;
    return [$num, $price];
  }
}
