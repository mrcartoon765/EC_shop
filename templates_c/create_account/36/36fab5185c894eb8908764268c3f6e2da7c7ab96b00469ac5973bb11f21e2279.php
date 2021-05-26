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

/* common/header.html.twig */
class __TwigTemplate_72098543b12668ab25de7111f99b93591f6846ef2579442f55f7fcde1992bb14 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
\t<head>

\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>HealthKnowledg</title>

\t\t<meta property\"og:title\" content=\"EC_BOOK, inc.\"/>
\t\t<meta property\"og:type\" content=\"website\"/>
\t\t<meta property\"og:image\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/bg-1024x666.png\"/>
\t\t<meta property\"og:url\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"/>
\t\t<meta property\"og:description\" content=\"健康知識に関する本のサイトです\"/>


\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/slick.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/slick-theme.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/responsive.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/styles.css\">
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/admin/styles.css\">


\t\t<!-- Bootstrap CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

\t\t<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">
\t</head>
\t<header>
\t\t<body>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/index.php\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/square_logo-1024x192.png\" id=\"logo\" style=\"width:200px;\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb ml-lg-0\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/Booklist.php\">書籍一覧</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_all.php\">関連商品一覧</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t関連商品カテゴリ
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg1_1.php\">食品</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg1_2.php\">サプリ</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg1_3.php\">ガジェット</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg1_4.php\">家具・寝具</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg1_5.php\">美容品</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t目的別商品カテゴリ
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg2_1.php\">ストレス対策</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg2_2.php\">アンチエイジング</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg2_3.php\">集中力改善</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg2_4.php\">睡眠改善</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_ctg2_5.php\">ダイエット</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 106
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["session"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["customer_login"] ?? null) : null) == 1)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t会員メニュー</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\">カート確認</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/customer/edit_customer.php\">ユーザー情報編集</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/create_account/logout.php\">ログアウト</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 121
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/customer/delete_customer.php\">退会</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 127
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/create_account/login.php\">ログイン</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form class=\"justify-content-center\" type=\"search\" action=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "shopping/sub/sublist_all.php\" method=\"GET\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control me-2\" type=\"search\" name=\"title\" placeholder=\"商品名検索\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-lg\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/cart.php\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart fa-5x\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<br><br>";
    }

    public function getTemplateName()
    {
        return "common/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 143,  255 => 133,  250 => 130,  244 => 127,  241 => 126,  233 => 121,  227 => 118,  221 => 115,  215 => 112,  208 => 107,  206 => 106,  196 => 99,  190 => 96,  184 => 93,  178 => 90,  172 => 87,  156 => 74,  150 => 71,  144 => 68,  138 => 65,  132 => 62,  118 => 51,  109 => 45,  95 => 36,  80 => 24,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.html.twig", "/var/www/html/EC_shop/templates/common/header.html.twig");
    }
}
