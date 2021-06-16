<?php

namespace shopping\lib;
class book{
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
  public function getbookList($ctg_id)
  {
    $table = ' book ';
    $col = ' id, title, detail, price, image, date, ctg_id ';
    $where = ($ctg_id !== '')? 'ctg_id = ? ' : '';
    $arrVal = ($ctg_id !== '') ? [$ctg_id] : [];
    $res = $this->db->select($table, $col, $where, $arrVal);
    return ($res !== false && count($res) !== 0)? $res : false;
  }
  public function getDetailData($book_id)
  {
  $table = ' book ';
  $col = ' book_id, title, detail, price, image, ctg_id ';
  $where = ($book_id !=='')? 'book_id = ?' : '';
  $arrVal = ($book_id !== '') ? [$book_id] : [];
  $res = $this->db->select($table, $col, $where, $arrVal);
  return ($res !== false && count($res) !== 0)? $res : false;
}
}