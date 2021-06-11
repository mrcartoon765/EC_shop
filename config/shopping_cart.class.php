<?php
namespace config;

$app_name = explode('/', dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Bootstrap.class.php";

class shopping_cart
{
    public static function cart_session($title = 'title', $price = 'price', $count = 'count', $ctg_id = 'ctg_id') //カートのに入った商品を配列別に分別しセッションをつなげる関数

    {
        $product_title = POST_GET::GET('$product_title', $title);
        $product_price = POST_GET::GET('$product_price', $price);
        $product_count = POST_GET::GET('$product_count', $count);
        $product_ctg_id = POST_GET::GET('$product_ctg_id', $ctg_id);

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
                'product_price' => (int) $product_price,
                'product_count' => (int) $product_count,
                'product_ctg_id' => (int) $product_ctg_id,
            ];
        }
        $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
        return $product;
    }

    public static function cart_product_sum() //カートの商品を種類ごとにを合計する関数

    {
        customer_login::login_session();
        $delete_name = isset($_POST['delete_name']) ? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';
        session_start();
        if ($delete_name != '') {
            unset($_SESSION['products'][$delete_name]);
        }
        $total = 0;
        $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
        return $products;
    }
    public static function cart_price_sum() //カートの合計金額を計算する処理、会員は７割引にする

    {
        $products = self::cart_product_sum();
        foreach ($products as $product_title => $cart_in_product) {
            $subtotal = (int) $cart_in_product['product_price'] * (int) $cart_in_product['product_count'];
            $total += $subtotal;
        }
        if ($_SESSION['customer_login'] == true) {
            $total = intval($total * 0.7);
        }
        $_SESSION['total_price'] = $total;
        $context['product_cart'] = $products;
        return $total;
    }

    public static function want_list_cart()
    { //欲しいリストの商品を商品一覧から変換しカートに入れる処理
        if (isset($_POST['want_list_table']) && isset($_POST['want_list_id'])) {
            $want_list_table = POST_GET::GET('$want_list_table', 'want_list_table');
            $want_list_id = POST_GET::GET('$want_list_id', 'want_list_id');
            $want_list_count = POST_GET::GET('$want_list_count', 'count');
            $want_list_ctgid = POST_GET::GET('$want_list_id', 'want_list_id');
            $data_get = database::get_data_where($want_list_table, 'id', $want_list_id);
            $cart_in_title = $data_get[0]['title'];
            $_POST['title'] = $cart_in_title;
            $cart_in_price = $data_get[0]['price'];
            $_POST['price'] = $cart_in_price;
            $cart_in_ctg_id = $data_get[0]['ctg_id'];
            $_POST['ctg_id'] = $cart_in_ctg_id;
            $_POST['count'] = $want_list_count;
            shopping_cart::cart_session();
        }
    }

    public static function cart_empty()
    { //カートから商品を空にする処理
        if ($_POST["cart_null"] == 1) {
            unset($_SESSION['products']);
            unset($_SESSION['total_price']);
            $_POST["cart_null"] = 0;
            header('Location:./cart.php');
        }
    }

    public static function cart_status_check()
    { //カートの重複チェック処理
        if ($_POST["cart_in_status"] == 1) {
            $_POST["cart_in_status"] = 0;
            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }
}
