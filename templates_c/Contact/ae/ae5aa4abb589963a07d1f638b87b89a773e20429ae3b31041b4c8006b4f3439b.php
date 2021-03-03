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

/* confirm.html.twig */
class __TwigTemplate_a3ddf7b9469e374b1d1601e12a401e7434e8571db06b5b4dc70b956b2c6c6a03 extends \Twig\Template
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
  <title>確認画面 | EC_BOOK</title>

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
        echo "/image/square_logo-1024x192.png\" id=\"logo\"></a><h1>
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
  <h3>CONFIRM</h3>
  <p>お問い合わせ内容確認</p>
  </div>

  <form method=\"POST\" action=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "Contact/send.php\" class=\"conf-form\">
  <div class=\"form-group\">
  <p>お名前 *</p>
  <p>";
        // line 61
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
  <input type=\"hidden\" name=\"name\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" >
  ";
        // line 63
        if ((($context["name"] ?? null) == "")) {
            // line 64
            echo "  <p class=\"error\">名前が入力されていません</p>
  ";
        }
        // line 65
        echo "</p>
  </div>

  <div class=\"form-group\">
  <p>Email *</p>
    <p>";
        // line 70
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</p>
  <input type=\"hidden\" name=\"email\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" >
  ";
        // line 72
        if ((($context["email"] ?? null) == "")) {
            // line 73
            echo "  <p class=\"error\">メールアドレスが入力されていません</p>
  ";
        }
        // line 74
        echo "</p>
  </div>

  <div class=\"form-group\">
  <p>お問い合わせ内容 *</p>
    <p>";
        // line 79
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</p>
    <input type=\"hidden\" name=\"text\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "\" >
  ";
        // line 81
        if ((($context["text"] ?? null) == "")) {
            // line 82
            echo "  <p class=\"error\">お問い合わせ内容が入力されていません</p>
  ";
        }
        // line 83
        echo "</p>
  </div>

  ";
        // line 86
        if (((("name" != "") && ("email" != "")) && ("text" != ""))) {
            // line 87
            echo "  <p>この内容で送信してよろしいですか？</p>
  <button type=\"submit\" class=\"btn btn-submit\">送信する</button>
  ";
        } else {
            // line 90
            echo "    <button class=\"btn btn-reutrn\">戻る</button>
  ";
        }
        // line 92
        echo "  </form>
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

  \$(\".btn-return\").click(function(){
    window.history.back(-1);
    return false;
  });

  });
  </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 92,  205 => 90,  200 => 87,  198 => 86,  193 => 83,  189 => 82,  187 => 81,  183 => 80,  179 => 79,  172 => 74,  168 => 73,  166 => 72,  162 => 71,  158 => 70,  151 => 65,  147 => 64,  145 => 63,  141 => 62,  137 => 61,  131 => 58,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  63 => 19,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm.html.twig", "/Applications/MAMP/htdocs/EC_shop/templates/Contact/confirm.html.twig");
    }
}
