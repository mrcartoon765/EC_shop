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
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "slick.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "slick-theme.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "responsive.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "styles.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "admin/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/bootstrap.min.css\">
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/buttons.css\">

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
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "book/booklist.php\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">書籍一覧</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_all.php\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">関連商品一覧</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">関連商品カテゴリ</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_1.php\">食品</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_2.php\">サプリ</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_3.php\">ガジェット</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_4.php\">家具・寝具</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg1_5.php\">美容品</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">目的別商品カテゴリ</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_1.php\">ストレス対策</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_2.php\">アンチエイジング</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_3.php\">集中力改善</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_4.php\">睡眠改善</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_ctg2_5.php\">ダイエット</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 110
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["session"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["customer_login"] ?? null) : null) == 1)) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">会員メニュー</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "/cart.php\">カート確認</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "want_list.php\">欲しい！リスト一覧</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "shopping_history.php\">購入履歴</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 126
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "edit_customer.php\">ユーザー情報編集</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
            echo "logout.php\">ログアウト</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "delete_customer.php\">退会</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 138
            echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
            echo "login.php\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">ログイン</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form class=\"justify-content-center\" type=\"search\" action=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_all.php\" method=\"GET\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control me-2\" type=\"search\" name=\"title\" placeholder=\"商品名検索\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-lg\"></i>

\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "cart.php\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart fa-5x\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</nav>
</html></header><br><br><br>
";
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
        return array (  293 => 156,  280 => 146,  275 => 143,  267 => 138,  264 => 137,  256 => 132,  250 => 129,  244 => 126,  238 => 123,  232 => 120,  226 => 117,  218 => 111,  216 => 110,  206 => 103,  200 => 100,  194 => 97,  188 => 94,  182 => 91,  166 => 78,  160 => 75,  154 => 72,  148 => 69,  142 => 66,  126 => 53,  115 => 45,  101 => 36,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.html.twig", "/var/www/html/EC_shop/templates/common/header.html.twig");
    }
}
