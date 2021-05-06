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
\t\t<meta property\"og:url\" content=\"('config\\\\Bootstrap::APP_URL') }}\"/>
\t\t<meta property\"og:description\" content=\"健康知識に関する本のサイトです\"/>

\t\t<link rel=\"icon\" href=\"favicon.ico\">

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">

\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/styles.css\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/css/responsive.css\" rel=\"stylesheet\">

    <!-- Bootstrap CSS -->
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

<!-- Bootstrap Javascript(jQuery含む) -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


\t\t<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">
\t</head>

<body>
<header>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-secondary\" >
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/index.php\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/square_logo-1024x192.png\" id=\"logo\" ></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/Booklist.php\">書籍一覧</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">関連商品一覧</a>
          ";
        // line 53
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["session"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["customer_login"] ?? null) : null) == 1)) {
            // line 54
            echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            会員メニュー
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"\">カート確認</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/customer/edit_customer.php\">ユーザー情報編集</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">そのた</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/create_account/logout.php\">ログアウト</a></li>
          </ul>
        </li>
          ";
        } else {
            // line 66
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/create_account/Login.php\">ログイン</a></li>
          ";
        }
        // line 68
        echo "      </ul>
      </ul>
       <form class=\"d-flex\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"全商品検索\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
      <div class=\"cart\">
\t\t\t\t<a href=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/cart.php\">
\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t</a>
\t\t\t</div><ul>
\t\t\t\t\t<li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/cart.php\"><i class=\"fas fa-shopping-cart\"></i></a></li></ul>
\t\t\t</nav>
\t\t</div>
    </div>
  </div>
</nav>
</header>";
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
        return array (  152 => 79,  145 => 75,  136 => 68,  130 => 66,  123 => 62,  118 => 60,  110 => 54,  108 => 53,  101 => 49,  87 => 40,  66 => 22,  61 => 20,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.html.twig", "/var/www/html/EC_shop/templates/common/header.html.twig");
    }
}
