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

/* index.html.twig */
class __TwigTemplate_e96b898f559602de8551dd26f7b7b48b09521038884d97452bbbf4dc675e3ac1 extends \Twig\Template
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
  <title>EC_BOOK</title>

  <meta property\"og:title\" content=\"EC_BOOK, inc.\" />
  <meta property\"og:type\" content=\"website\" />
  <meta property\"og:image\" content=\"('config\\\\Bootstrap::APP_URL') }}image/bg-1024x666.png\" />
  <meta property\"og:url\" content=\"('config\\\\Bootstrap::APP_URL') }}\" />
  <meta property\"og:description\" content=\"BOOK_ECのサイトです\" />

  <link rel=\"icon\" href=\"favicon.ico\">

<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_CSS"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_RESPONSIVE"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">

</head>

<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
<h1><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\"><img src= \"";
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "image/square_logo-1024x192.png\" id=\"logo\"></a><h1>
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
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a></li>
  </ul>
  </nav>

  <nav class=\"pc-menu menu-left menu\">
  <ul>
  <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a></li>
  </ul>
  </nav>
<nav class=\"pc-menu menu-right menu\">
    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a>
</nav>
  </div>
  </header>

  <main>
  <div class=\"top-img\">
  <div class=\"container\">
  <div class=\"top-text\">
  <h2>THE BEST SERVICE</h2>
  <h2>TO YOU.</h2>
  </div>
  </div>
  </div>

  <div class=\"wrapper\" id=\"news\">
  <div class=\"container\">
  <div class=\"wrapper-title\">
  <h3>NEWS</h3>
  <p>お知らせ</p>
  </div>
  <div class=\"news-list\">
";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 84
            echo "<ul>
<li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
            echo "page.php?id=
";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "updated_at", [], "any", false, false, false, 86), "html", null, true);
            echo "
 ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</a></li>
</ul>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "  </div>
  </div>
  </div>

  <div class=\"wrapper\" id=\"service\">
  <div class=\"container\">
  <div class=\"wrapper-title\">
  <h3>SERVICE</h3>
  <p>サービス</p>
  </div>
  <div class=\"boxs\">
  <div class=\"box\">
  <img src=\"/image/serviceimg-1.jpg\">
  <h4 class=\"service-title\">ITコンサルティング</h4>
  </div>
  <div class=\"box\">
  <img src=\"/image/serviceimg-2.jpg\">
  <h4 class=\"service-title\">ソフトウェア開発</h4>
  </div>
  <div class=\"box\">
  <img src=\"/image/serviceimg-3.jpg\">
  <h4 class=\"service-title\">WEBデザイン</h4>
  </div>
  <div class=\"box\">
  <img src=\"/image/serviceimg-4.jpg\">
  <h4 class=\"service-title\">動画制作</h4>
  </div>
  </div>
  </div>
  </div>

  <div class=\"wrapper\" id=\"about\">
  <div class=\"container\">
  <div class=\"wrapper-title\">
  <h3>ABOUT US</h3>
  <p>会社概要</p>
  </div>
  <table class=\"about-table\">
  <tbody>
  <tr>
  <th>会社名</th>
  <td>BOOK_EC</td>
  </tr>
  <tr>
  <th>代表者名</th>
  <td>架空</td>
  </tr>
  <tr>
  <th>所在地</th>
  <td>
  <p>〒　000-9999</p>
  <p>東京都千代田区丸の内　架空ビル32階</p>
  </td>
  </tr>
  <tr>
  <th>アクセス</th>
  <td><iframe src=\"https://goo.gl/maps/w1mmJKtAmsUMLxYE7\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></td>
  </tr>
  </tbody>
  </table>
  </div>
  </div>
  <div class=\"wrapper last-wrapper\" id=\"contact\">
  <div class=\"container\">
  <div class=\"wrapper-title\">
  <h3>CONTACT</h3>
  <p>お問い合わせ</p>
  </div>
  <form method=\"POST\" action=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/Contact/confirm.php\">
  <div class=\"form-group\">
  <p>お名前 *</p>
  <input type=\"text\" name=\"name\">
  </div>
  <div class=\"form-group\">
  <p>Email *</p>
  <input type=\"email\" name=\"email\">
  </div>
  <div class=\"form-group\">
  <p>お問合せ内容 *</p>
  <textarea name=\"text\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-submit\">内容を確認する</button>
  </form>
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
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 158,  191 => 90,  182 => 87,  176 => 86,  172 => 85,  169 => 84,  165 => 83,  140 => 61,  133 => 57,  128 => 55,  124 => 54,  120 => 53,  116 => 52,  107 => 46,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  72 => 28,  59 => 18,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/EC_shop/templates/index.html.twig");
    }
}
