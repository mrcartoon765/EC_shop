<?php 

namespace shopping\lib;
class Book{
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
  public function getBookList($ctg_id)
  {
    $table = ' Book ';
    $col = ' book_id, title, price, image, ctg_id ';
    $where = ($ctg_id !== '')? 'ctg_id = ? ' : '';
    $arrVal = ($ctg_id !== '') ? [$ctg_id] : [];
    $res = $this->db->select($table, $col, $where, $arrVal);
    return ($res !== false && count($res) !== 0)? $res : false;
  }
  public function getItemData($Book_id)
  {
  $table = ' Book ';
  $col = ' book_id, title, detail, price, image, ctg_id ';
  $where = ($Book_id !=='')? 'Book_id = ?' : '';
  $arrVal = ($Book_id !== '') ? [$Book_id] : [];
  $res = $this->db->select($table, $col, $where, $arrVal);
  return ($res !== false && count($res) !== 0)? $res : false;
}
}