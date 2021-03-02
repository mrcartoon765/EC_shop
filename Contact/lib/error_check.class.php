<?php

namespace Contact\lib;

class error_check {
  private $confirm_dataArr = [];
  private $confirm_errArr = [];

  public function __construct(){
  }

  public function confirm_error_check($dataArr)
  {
    $this->nameCheck;
    $this->mailCheck;
    $this->textCheck;
    return $this->confirm_errArr;
  }

  public function nameCheck($name)
  {
    if($name=='')
    $confirm_errArr['name'] = '名前が入力されていません';
    return;
  }
  public function mailCheck($email)
  {
    if($email=='')
    $confirm_errArr['email'] = 'メールアドレスが入力されていません';
    return;
  }
  public function textCheck($text)
  {
    if($text=='')
    $confirm_errArr['text'] = 'お問合わせ内容が入力されていません';
    return;
  }
}