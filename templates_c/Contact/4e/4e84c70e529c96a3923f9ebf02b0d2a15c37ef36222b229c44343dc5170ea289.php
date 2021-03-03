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

/* send.html.twig */
class __TwigTemplate_f4cafc19987a8eff7095351a4bc221b89a3d50aa2d9e4913a531835937f3a9e5 extends \Twig\Template
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
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>お問い合わせ内容送信 | EC_BOOK</title>

  <link rel=\"icon\" href=\"favicon.ico\">

<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css?v=2\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/responsive.css?v=2\" rel=\"stylesheet\">

</head>

<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
  <h1><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\"><img src= \"";
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/image/square_logo-1024x192.png\" id=\"logo\"></a></h1>
  </div>

  <div class=\"toggle\">
  <div>
  <span></span>
  <span></span>
  <span></span>
  </div>
  </div>

  <nav class=\"sp-menu menu\">
  <ul>
  <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
    <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  </ul>
  </nav>

  <nav class=\"pc-menu menu-left menu\">
  <ul>
  <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
    <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  </ul>
  </nav>
  </div>
  </header>

  <main>
  <div class=\"wrapper last-wrapper\">
  <div class=\"container\">
  <div class=\"wrapper-title\">
  <h3>SEND</h3>
  <p>お問い合わせ送信</p>
  </div>
  <div class=\"wrapper-body\">
  <div class=\"thanks\">
  <h4>";
        // line 59
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</h4>
  </div>
  <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_constant("confirm\\Bootstrap::APP_URL"), "html", null, true);
        echo " >トップページに戻る</button>
  </div>
  </div>
  </div>
  </main>

  <footer>
  <div class=\"container\">
  <p>Copyright @ 2021 EC_BOOK</p>
  </div>
  </footer>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script>
  \$(function(){
    \$('.toggle').click(function(){
      \$(\"header\").toggleClass('open');
      \$(\".sp-menu\").slideToggle(500);
    });
  });
  </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  132 => 59,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  63 => 19,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "send.html.twig", "/Applications/MAMP/htdocs/EC_shop/templates/Contact/send.html.twig");
    }
}
