<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./common/header.html.twig */
class __TwigTemplate_514cd1e77945d1c4cf27e39ab27d7751379e09dba7bf0a957facdca7ac5a4f2a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>

  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>HealthKnowledg</title>

  <meta property\"og:title\" content=\"EC_BOOK, inc.\" />
  <meta property\"og:type\" content=\"website\" />
  <meta property\"og:image\" content=\"../../image/bg-1024x666.png\" />
  <meta property\"og:url\" content=\"('config\\\\Bootstrap::APP_URL') }}\" />
  <meta property\"og:description\" content=\"健康知識に関する本のサイトです\" />

  <link rel=\"icon\" href=\"favicon.ico\">

<link href=\"../../css/styles.css\" rel=\"stylesheet\">

<link href=\"../../css/responsive.css\" rel=\"stylesheet\">


<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">
</head>

<body>
<header>
  <div class=\"container\">
  <div class=\"header-logo\">
<h1><a href=\"../../index.php\"><img src= \"../../image/square_logo-1024x192.png\" id=\"logo\"></a><h1>
  </div>

  <div class=\"toggle\">
  <div>
  <span></span>
  <span></span>
  <span></span>
  </div>
  </div>

  <div class=\"cart\">
      <a href=\"../../shopping/cart.php\"><i class=\"fas fa-shopping-cart\"></i></a>
  </div>

  <nav class=\"sp-menu menu\">
  <ul>
  <li><a href=\"../../index.php#service\">サービス</a></li>
  <li><a href=\"../../shopping/Booklist.php\">書籍一覧</a></li>
  <li><a href=\"../../index.php#news\">お知らせ</a></li>
  <li><a href=\"../../index.php#about\">会社概要</a></li>
  <li><a href=\"../../index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"../../create_account/regist.php\">新規会員登録</a></li>
  <li><a href=\"../../create_account/Login.php\">ログイン</a></li>
  <li><a href=\"../../create_account/logout.php\">ログアウト</a></li>
  </ul>
  </nav>

  <nav class=\"pc-menu menu-left menu\">
  <ul>
  <li><a href=\"../../index.php#service\">サービス</a></li>
  <li><a href=\"../../shopping/Booklist.php\">書籍一覧</a></li>
  <li><a href=\"../../index.php#news\">お知らせ</a></li>
  <li><a href=\"../../index.php#about\">会社概要</a></li>
  <li><a href=\"../../index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"../../create_account/regist.php\">新規会員登録</a></li>
  <li><a href=\"../../create_account/Login.php\">ログイン</a></li>
  <li><a href=\"../../create_account/logout.php\">ログアウト</a></li>
  </ul>
  </nav>
<nav class=\"pc-menu menu-right menu\">
  <ul>
  <li><a href=\"../../shopping/cart.php\"><i class=\"fas fa-shopping-cart\"></i></a></li>
  </ul>
</nav>
  </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "./common/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./common/header.html.twig", "/var/www/html/EC_shop/templates/common/header.html.twig");
    }
}
