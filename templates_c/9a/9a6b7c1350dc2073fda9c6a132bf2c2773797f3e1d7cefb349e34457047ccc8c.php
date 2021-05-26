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

/* /index.html.twig */
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
        echo "\t";
        $this->loadTemplate("common/header.html.twig", "/index.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>

\t\t<div class=\"top-img\">
\t\t\t<div class=\"container\">
      <div class=\"top-text\">
\t\t\t\t\t<h1>Bringing Health Knowledge</h1>
\t\t\t\t\t<h1>to you.</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wrapper-title\">
\t\t\t\t\t<h4>NEWS</h4>
\t\t\t\t\t<p>お知らせ</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-list\">
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 20
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><h7>
\t\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "updated_at", [], "any", false, false, false, 22), 0, 10), "html", null, true);
            echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "page.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</h7>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>

\t\t<div class=\"container\">

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h4 class=\"featurette-heading text-center\"><span class=\"text-muted\">
\t\t\t\t健康知識に関する書籍</h4></span>
       <h7>昨今の情勢で高まる世の中の”健康意識”に対して、科学的なアプローチやメタ分析を用いた今日からでも活かせるノウハウが詰また書籍の購入できます。</h7>
\t\t\t <div class=\"text-center\">
\t\t\t\t        <p><a class=\"btn btn-secondary \" href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/Booklist_a.php\" role=\"button\">書籍一覧 &raquo;</a></p>
\t\t\t </div>
      </div>
      <div class=\"col-md-5\">
\t\t\t <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/detail.php?id=";
        echo twig_escape_filter($this->env, ($context["Book_id"] ?? null), "html", null, true);
        echo "\">
\t\t\t<img class=\"rounded-circle d-block mx-auto\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo "book/";
        echo twig_escape_filter($this->env, ($context["Book_image"] ?? null), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"200\" height=\"200\">
\t\t\t </a>
    </div>
    </div>

\t\t<hr class=\"featurette-divider\">
    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">
        <h4 class=\"featurette-heading text-center\"><span class=\"text-muted\">関連する商品</span></h4>
        <h7>書籍にて紹介されている商品の購入が可能です。
\t\t\t\t弊社での取扱い商品はいずれもメーカー直仕入れの正規品でございます。安心してお買い求めいただけるようになっております</h7>
\t\t\t <div class=\"text-center\">
\t\t\t\t        <p><a class=\"btn btn-secondary \" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_all.php\" role=\"button\">関連商材一覧 &raquo;</a></p>
      </div>
      </div>
      <div class=\"col-md-5 order-md-1\">
\t\t\t    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/detail.php?id=";
        echo twig_escape_filter($this->env, ($context["sub_id"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<img class=\"rounded-circle d-block mx-auto\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo "sub/";
        echo twig_escape_filter($this->env, ($context["sub_image"] ?? null), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"200\" height=\"200\">
\t\t\t\t\t</a>
      </div>
      </div>

 <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h4 class=\"featurette-heading text-center\"><span class=\"text-muted\">会員特典</span></h4>
\t\t\t\t<h7 class=\"text-center\">会員登録されたお客様からの購入には定価の３割引でお買い求めいただけます</h7>
\t\t\t <div class=\"text-center\">
\t\t\t\t <p><a class=\"btn btn-secondary text-center\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/regist.php\" role=\"button\">新規会員登録 &raquo;</a></p>
      </div>
      </div>
      <div class=\"col-md-5\">
\t\t\t<img class=\"rounded-circle d-block mx-auto\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/unnamed.jpeg\" alt=\"Generic placeholder image\" width=\"200\" height=\"200\">
    </div>
    </div>

    <hr class=\"featurette-divider\">
    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">
        <h4 class=\"featurette-heading text-center\"><span class=\"text-muted\">会社概要</span></h4>
        <p class=\"lead text-center\">会社名:合同会社 HEALTH KNOWLEGE</p>
        <p class=\"lead text-center\">代表者名：田中 正義</p>
        <p class=\"lead text-center\">〒 000-9999</p>
        <p class=\"lead text-center\">東京都千代田区丸の内 架空ビル32階</p>
      </div>
      <div class=\"col-md-5 order-md-1\">
       <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.717639851197!2d139.7609893778801!3d35.680478120777906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbcd794975%3A0x239c242b7b27f6c9!2z5pel5pys44CB44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF!5e0!3m2!1sja!2sus!4v1621490719685!5m2!1sja!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe> 
      </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h4 class=\"featurette-heading text-center\"><span class=\"text-muted\">お問い合わせ</span></h4>
\t\t\t\t<form method=\"POST\" action=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/Contact/confirm.php\">
        <p class=\"lead text-left\">お名前 *<input type=\"text\" name=\"name\"></p>
        <p class=\"lead text-left\">Email *<input type=\"email\" name=\"email\"></p>
      </div>
      <div class=\"col-md-5\">
\t\t\t\t<p>お問合せ内容 *</p>
\t\t\t\t\t\t<textarea name=\"text\"></textarea>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary \">内容を確認する</button>
    </div>
      </div>
      </div>

    <hr class=\"featurette-divider\">
\t\t</div>

";
        // line 121
        $this->loadTemplate("common/footer.html.twig", "/index.html.twig", 121)->display($context);
    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 121,  199 => 106,  173 => 83,  166 => 79,  149 => 67,  143 => 66,  136 => 62,  119 => 50,  113 => 49,  106 => 45,  90 => 31,  78 => 25,  72 => 24,  67 => 22,  63 => 20,  59 => 19,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/index.html.twig", "/var/www/html/EC_shop/templates/index.html.twig");
    }
}
