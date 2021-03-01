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
class __TwigTemplate_2d6c3c183b102ecf3a904278d8c83f27827b934fb3e3d0ba1f7311f79ca869a4 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css?v=2\" rel=\"stylesheet\">
</head>
<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
  <h1><a href=\"index.html\"><img src=\"./image/square_logo-1024x192.png\" id=\"logo\"></a></h1>
  </div>

  <nav class=\"menu-left menu\">
  <ul>
  <li><a href=\"index.php#service\">サービス</a></li>
  <li><a href=\"index.php#news\">お知らせ</a></li>
  <li><a href=\"index.php#about\">会社概要</a></li>
  </ul>
  </nav>
  </div>
  </header>
  <main>
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
        return array (  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "/Applications/MAMP/htdocs/ec_shop2/templates/ec_shop2/page.html.twig");
    }
}
