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

/* page.html.twig */
class __TwigTemplate_f60f4c91aeb6fbb4651ccda7db65366dd6e3708fe541e1cd3bc70b2ce3a5fdf6 extends \Twig\Template
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
  <title>記事タイトル</title>

  <link rel=\"icon\" href=\"favicon.ico\">

  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_CSS"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_RESPONSIVE"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"htttps://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">
</head>
<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
<h1><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\"><img src= \"";
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/image/square_logo-1024x192.png\" id=\"logo\"></a><h1>
  </div>

  <nav class=\"menu-left menu\">
  <ul>
  <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  </ul>
  </nav>
  </div>
  </header>
  <main>
  <div class=\"breadcrumbs\">
  <div class=\"container\">
  <ul>
  <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php\">TOP</a></li>
  <li>ホームページをリニューアルしました</li>
  </ul>
  </div>
  </div>
  <div class=\"wrapper\">
  <div class=\"container\">
  <article>
  <div class=\"page-title\">
  <h1>ここに記事タイトルが入ります。</h1>
  <p></p>
  </div>
  <div class=\"page-text\">
  <p>ここに記事本文が入ります。</p>
  <p>こんにちは。EC_BOOKです。ここにお知らせを書いていきます。</p> 
  <br>
  <p>より見やすく、使いやすいショップに夏用運営を進めますので、引き続きご愛顧のほどよろしくお願い申し上げます。</p>
  </div>
  </article>
  </div>
  </div>
  </main>
  <footer>
  <div class=\"container\">
    <p>Copyright @ 2021 EC_BOOK</p>
  </div>
  </footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  64 => 20,  53 => 12,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "/Applications/MAMP/htdocs/EC_shop/templates/page.html.twig");
    }
}
