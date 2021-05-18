<?php
namespace config;

use shopping\lib\shopping_Session;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class shopping_cart
{
    public static function cart_session()//カートのセッションをつなげる関数
    {
        $product_title = POST_GET::GET('$product_title','title');
        $product_price = POST_GET::GET('$product_price','price');
        $product_count = POST_GET::GET('$product_count','count');
        $product_ctg_id = POST_GET::GET('$product_ctg_id','ctg_id');

        session_start();

        if (isset($_SESSION['products'])) {
            $product = $_SESSION['products'];
            foreach ($product as $key => $cart_product) {
                if ($key == $product_title) {
                    $product_count = (int) $product_count + (int) $cart_product['product_count'];
                }
            }
        }

        if ($product_title != '' && $product_price != '' && $product_count != '') {
            $_SESSION['products'][$product_title] = [
                'product_title' => $product_title,
                'product_price' => (int)$product_price,
                'product_count' => (int)$product_count,
                'product_ctg_id' =>(int)$product_ctg_id,
            ];
        }
        $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
    }

    public static function cart_sum()//カートの合計金額を計算する関数
    {
        customer_login::login_session();
        $customer_login = $_SESSION['customer_login'];
        $delete_name = isset($_POST['delete_name']) ? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';
        session_start();
        if ($delete_name != '') {
            unset($_SESSION['products'][$delete_name]);
        }
        $total = 0;
        $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
        foreach ($products as $product_title => $cart_in_product) {
            $subtotal = (int) $cart_in_product['product_price'] * (int) $cart_in_product['product_count'];
            $total += $subtotal;
        }
        if ($customer_login == true) {
            $total = intval($total * 0.7);
        }
        $_SESSION['total_price'] = $total;
        $context['product_cart'] = $products;
        $context['total'] = $total;
        return $total;
    }
}