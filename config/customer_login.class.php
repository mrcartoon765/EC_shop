<?php
class customer_login
{
  public static function login_session()
  {
      session_start();
      $login = isset($_SESSION['customer_login'])? $_SESSION['customer_login']:false;
      if($login == false){
        header("Location:" . Bootstrap::APP_URL . "/index.php");
        exit;
      }
      if($_SESSION['customer_id'] == ''){
        header("Location:" . Bootstrap::APP_URL . "/index.php");
        exit;
      }
      return $login;
  }
  public static function login_data()
  {
      $dbh = new \PDO("mysql:host=mysql;dbname=BOOK_EC",Bootstrap::DB_USER,Bootstrap::DB_PASS);
      $stmt = $dbh->prepare("SELECT * FROM customer WHERE id=:id");
      $stmt->bindParam(":id",$_SESSION['customer_id']);
      $stmt->execute();
      $login_customer_data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $login_customer_data[0];
    }
}