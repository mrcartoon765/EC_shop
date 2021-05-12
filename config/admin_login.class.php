<?php

namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class admin_login
{
    public static function login_session()
    {
        session_start();
        if ($_SESSION['admin_login'] == false) {
            header("Location:" . Bootstrap::ENTRY_URL . "/index.php");
            exit;
            template_twig_files::template_load_front();
        }}
}