<?php 

namespace shopping\lib;
use Boost\db;

require_once dirname(__FILE__) . "/../../../db.php";

class Book
{
  public $cateArr = [];
  public $db = null;
  public function __construct($db)
  {
    $this->db = $db;
  }
public function getCategoryList()
{
  $table = ' category ';
  $col = ' ctg_id, category_name ';
  $res = $this->db->select($table, $col);
  return $res;
}
public function getItemList($ctg_id)
{
  $table = ' Book ';
  $col = ' id, title, price, image, ctg_id ';
  $where = ($ctg_id !=='') ? ' ctg_id = ? ' : '';
  $arrVal = ($ctg_id !== '') ? [$ctg_id] : [];
  $res = $this->db->select($table, $col, $where, $arrVal);
  return ($res !== false && count($res) !== 0) ? $res : false;
}
public function getItemDetailData($Book_id){
  $table = ' Book ';
  $col = ' id, title, price, image, ctg_id';
  $where = ($Book_id !== '') ? ' id = ?' : '';
  $arrVal = ($Book_id !== '') ? [$Book_id] : [];
  $res = $this->db->select($table, $col, $where, $arrVal);
  return ($res !== false && count($res) !== 0) ? $res : false;
}
}