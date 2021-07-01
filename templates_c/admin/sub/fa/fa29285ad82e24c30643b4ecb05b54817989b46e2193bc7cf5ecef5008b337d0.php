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

/* common/header_admin.html.twig */
class __TwigTemplate_a789a42cb1470e60a151ef7a220d52eee41e66f6faf6243ab6f37a929ed8f627 extends \Twig\Template
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
<head>

  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>管理者画面</title>

  <meta property\"og:title\" content=\"EC_BOOK, inc.\" />
  <meta property\"og:type\" content=\"website\" />
  <meta property\"og:image\" content=";
        // line 12
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"/image/bg-1024x666.png\" />
  <meta property\"og:url\" content=";
        // line 13
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"/index.php\" />
  <meta property\"og:description\" content=\"健康知識に関する本のサイトです\" />


     <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "admin/styles.css\">
    ";
        // line 19
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/buttons.css\" rel=\"stylesheet\">

    <!-- Bootstrap CSS -->
<!-- CSS only -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\"><link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">

</head>
<body>
<header>
<nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #20c997;\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/admin/dashboard.php\"> <button class=\"btn-secondary btn-radius\"><h3>管理画面トップ</h3></button></a>
    <button class=\"navbar-toggler\" type=\"button button-red\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/news/news.php\">
          <button class=\"btn btn-dark\">記事管理</button>
          </a>
        </li>
        <li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/user/users.php\">
          <button class=\"btn btn-dark\">会員管理</button>
          </a>
        </li>
        <li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/order/orders.php\">
          <button class=\"btn btn-dark\">受注管理</button>
          </a>
        </li>
        <li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/admin/book/Books.php\">
          <button class=\"btn btn-dark\">書籍管理</button>
          </a>
        </li>
        <li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/admin/sub/secondary_products.php\">
          <button class=\"btn btn-dark\">副商材管理</button>
          </a>
        </li>
        <li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\">
          <button class=\"btn btn-dark\">サイトトップページへ</button>
          </a>
\t\t\t\t<li class=\"nav-item text-center\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/admin/logout.php\">
          <button class=\"btn btn-danger\">管理画面からログアウト</button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<br>";
    }

    public function getTemplateName()
    {
        return "common/header_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 67,  134 => 63,  126 => 58,  118 => 53,  110 => 48,  102 => 43,  94 => 38,  84 => 31,  70 => 20,  65 => 19,  61 => 17,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header_admin.html.twig", "/var/www/html/EC_shop/templates/common/header_admin.html.twig");
    }
}
