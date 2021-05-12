<?php
namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class shopping_cart
{
    public static function cart_session()
    {
        $product_title = isset($_POST['title']) ? htmlspecialchars($_POST['title'], ENT_QUOTES, 'utf-8') : '';
        $product_price = isset($_POST['price']) ? htmlspecialchars($_POST['price'], ENT_QUOTES, 'utf-8') : '';
        $product_count = isset($_POST['count']) ? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';

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
                'product_price' => $product_price,
                'product_count' => $product_count,
            ];
        }
        $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
    }

    public static function cart_sum()
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
    }
}