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
class __TwigTemplate_c0bacfc7397dbad4dcdbf0ee1ed6f03a825093f2c53ae2fb162495aed0ea0eff extends \Twig\Template
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-DFLEE6WX4R\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DFLEE6WX4R');
</script>
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
        // line 25
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/css/style.css?v=2\" rel=\"stylesheet\">
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/css/responsive.css?v=2\" rel=\"stylesheet\">
<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">

</head>

<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
<h1><a href=\"";
        // line 35
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
        // line 48
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  </ul>
  </nav>

  <nav class=\"pc-menu menu-left menu\">
  <ul>
  <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  </ul>
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
  <ul>
  <li>
  <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "page.php\">リニューアルしました。</a>
  </li>
  <li>
  <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "page.php\">年末年始の営業時間について</a>
  </li>
  </ul>
  </div>
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
        // line 161
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
        return array (  240 => 161,  166 => 90,  160 => 87,  131 => 61,  127 => 60,  123 => 59,  119 => 58,  109 => 51,  105 => 50,  101 => 49,  97 => 48,  79 => 35,  67 => 26,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/Applications/MAMP/htdocs/EC_shop/templates/EC_shop/index.html.twig");
    }
}
