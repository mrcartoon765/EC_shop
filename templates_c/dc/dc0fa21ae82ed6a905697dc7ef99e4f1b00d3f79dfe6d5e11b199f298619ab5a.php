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
        echo "<!DOCTYPE html>
<html>
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#\">

\t\t<html lang=\"ja\">
\t\t<link rel=\"canonical\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
        echo "\">
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"theme-color\" content=\"#DD8669\"/>
\t\t<meta name=\"description\" content=\"EC_SHOP\">
\t\t<title>HealthKnowledg</title>

\t\t<meta property\"og:title\" content=\"EC_BOOK, inc.\"/>
\t\t<meta property\"og:type\" content=\"website\"/>
\t\t<meta property\"og:image\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/logo.png\"/>
\t\t<link rel=\"apple-touch-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/logo.png\">
\t\t<meta property\"og:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"/>
\t\t<meta property\"og:description\" content=\"健康知識に関する本のサイトです\"/>


\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>


\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "responsive.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "styles.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "admin/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/buttons.css\">

\t\t<!-- Bootstrap CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t\t<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">

\t\t<link rel=\"manifest\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "manifest.json\">

\t</head>
\t<header>
\t\t<body>
\t\t\t<nav class=\"navbar navbar-expand-xl navbar-dark bg-dark\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand mx-auto\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/square_logo-1024x192.webp\" id=\"logo\" style=\"width:200px;\" alt=\"logo_image\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb ml-lg-0\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "book/booklist.php\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">書籍一覧</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_all.php\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">関連商品一覧</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink_relation_ctg\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">関連商品カテゴリ</button>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink_relation_ctg\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_1.php\">食品</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_2.php\">サプリ</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_3.php\">ガジェット</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_4.php\">家具・寝具</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_5.php\">美容品</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink_purpose_ctg\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">目的別商品カテゴリ</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink_purpose_ctg\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_1.php\">ストレス対策</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_2.php\">アンチエイジング</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_3.php\">集中力改善</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_4.php\">睡眠改善</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_5.php\">ダイエット</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 117
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["session"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["customer_login"] ?? null) : null) == 1)) {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink_customer\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">会員メニュー</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink_customer\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "/cart.php\">カート確認</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 127
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "want_list.php\">欲しい！リスト一覧</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "shopping_history.php\">購入履歴</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "edit_customer.php\">ユーザー情報編集</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
            echo "logout.php\">ログアウト</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "delete_customer.php\">退会</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
            echo "login.php\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">ログイン</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form class=\"justify-content-center\" type=\"search\" action=\"";
        // line 153
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_all.php\" method=\"GET\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control me-2 border-4 border-info\" type=\"search\" name=\"title\" placeholder=\"商品名検索\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-lg\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t";
        // line 163
        if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["session"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["customer_login"] ?? null) : null) == 1)) {
            // line 164
            echo "\t\t\t\t\t\t\t\t<h8>いらっしゃいませ<br>";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["session"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["customer_family_name"] ?? null) : null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["session"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["customer_first_name"] ?? null) : null), "html", null, true);
            echo "さん<br></h8>
\t\t\t\t\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 167
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "cart.php\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart fa-5x\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</body>
\t</header>
</html><h1 style=\"margin-bottom:4rem;\"><br></h1>";
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
        return array (  315 => 167,  312 => 166,  305 => 164,  303 => 163,  290 => 153,  285 => 150,  277 => 145,  274 => 144,  266 => 139,  260 => 136,  254 => 133,  248 => 130,  242 => 127,  236 => 124,  228 => 118,  226 => 117,  216 => 110,  210 => 107,  204 => 104,  198 => 101,  192 => 98,  176 => 85,  170 => 82,  164 => 79,  158 => 76,  152 => 73,  136 => 60,  125 => 52,  111 => 43,  101 => 36,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  65 => 18,  61 => 17,  57 => 16,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.html.twig", "/var/www/html/EC_shop/templates/common/header.html.twig");
    }
}
