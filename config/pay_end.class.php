<?php

namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class pay_end{
	//ログインしている場合の購入の処理
	public static function login_pay_end($mail,$zip1,$zip2,$address,$tel1,$tel2,$tel3,$total,$customer_id,$products){
	$dbh = database::dbh();
$stmt1 = $dbh->prepare("INSERT INTO orders(mail, zip1, zip2, address, tel1, tel2, tel3, total, customer_id, created_at, updated_at) VALUES(:mail, :zip1, :zip2, :address, :tel1, :tel2, :tel3, :total, :customer_id, now(), now())");

$stmt1->bindParam(':mail', $mail);
$stmt1->bindParam(':zip1',$zip1);
$stmt1->bindParam(':zip2',$zip2);
$stmt1->bindParam(':address',$address);
$stmt1->bindParam(':tel1',$tel1);
$stmt1->bindParam(':tel2',$tel2);
$stmt1->bindParam(':tel3',$tel3);
$stmt1->bindParam(':total',$total);
$stmt1->bindParam(':customer_id',$customer_id);
$stmt1->execute();
$order_id = $dbh->lastInsertId();

foreach($products as $key => $product){
$stmt2 = $dbh->prepare("INSERT INTO order_products(order_id,product_title,num,price,ctg_id,customer_id,table_name,product_id,product_image) VALUES(:order_id,:product_title,:num,:price,:ctg_id,:customer_id,:table_name,:product_id,:product_image)");

$stmt2->bindParam(':order_id',$order_id);
$stmt2->bindParam(':product_title',$key);
$stmt2->bindParam(':num',$product['product_count']);
$stmt2->bindParam(':price',$product['product_price']);
$stmt2->bindParam(':ctg_id',$product['product_ctg_id']);
$stmt2->bindParam(':customer_id',$customer_id);
$stmt2->bindParam(':table_name',$product['product_table_name']);
$stmt2->bindParam(':product_id',$product['product_id']);
$stmt2->bindParam(':product_image',$product['product_image']);

$stmt2->execute();
}
	}
	//ログインしていない場合の購入の処理
	public static function no_login_pay_end($mail,$zip1,$zip2,$address,$tel1,$tel2,$tel3,$total,$products){
		$dbh = database::dbh();
	$stmt1 = $dbh->prepare("INSERT INTO orders(mail, zip1, zip2, address, tel1, tel2, tel3, total, customer_id, created_at, updated_at) VALUES(:mail, :zip1, :zip2, :address, :tel1, :tel2, :tel3, :total, :customer_id, now(), now())");
	$customer_id = 'not member';
	$stmt1->bindParam(':mail', $mail);
	$stmt1->bindParam(':zip1',$zip1);
	$stmt1->bindParam(':zip2',$zip2);
	$stmt1->bindParam(':address',$address);
	$stmt1->bindParam(':tel1',$tel1);
	$stmt1->bindParam(':tel2',$tel2);
	$stmt1->bindParam(':tel3',$tel3);
	$stmt1->bindParam(':total',$total);
	$stmt1->bindParam(':customer_id',$customer_id);
	$stmt1->execute();
	$order_id = $dbh->lastInsertId();

	foreach($products as $key => $product){
	$stmt2 = $dbh->prepare("INSERT INTO order_products(order_id,product_title,num,price,ctg_id,customer_id,table_name,product_id,product_image) VALUES(:order_id,:product_title,:num,:price,:ctg_id,:customer_id,:table_name,:product_id,:product_image)");

	$stmt2->bindParam(':order_id',$order_id);
	$stmt2->bindParam(':product_title',$key);
	$stmt2->bindParam(':num',$product['product_count']);
	$stmt2->bindParam(':price',$product['product_price']);
	$stmt2->bindParam(':ctg_id',$product['product_ctg_id']);
	$stmt2->bindParam(':customer_id',$customer_id);
	$stmt2->bindParam(':table_name',$product['product_table_name']);
	$stmt2->bindParam(':product_id',$product['product_id']);
	$stmt2->bindParam(':product_image',$product['product_image']);

	$stmt2->execute();
	}
		}
}