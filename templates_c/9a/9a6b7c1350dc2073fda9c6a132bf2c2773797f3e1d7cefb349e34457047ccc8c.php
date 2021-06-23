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
        $this->loadTemplate("common/header.html.twig", "/index.html.twig", 1)->display($context);
        // line 2
        echo "<main>

\t<div class=\"top-img\">
\t\t<div class=\"container\">
\t\t\t<div class=\"top-text\">
\t\t\t\t<h1>Bringing Health Knowledge</h1>
\t\t\t\t<h1>to you.</h1>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"wrapper\">
\t\t<div class=\"container-flluid\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h1>NEWS</h1>
\t\t\t\t<h3>お知らせ</h3>
\t\t\t</div>
\t\t\t<div class=\"news-list\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 20
            echo "\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h7>
\t\t\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "updated_at", [], "any", false, false, false, 23), 0, 10), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "page.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</h7>
\t\t\t\t</ul>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</div>
\t</div>
</div>

<div class=\"container\">

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h4 class=\"featurette-heading text-center\">
\t\t\t\t<span class=\"text-muted\">
\t\t\t\t\t健康知識に関する書籍</h4>
\t\t\t</span>
\t\t\t<h7>昨今の情勢で高まる世の中の”健康意識”に対して、科学的なアプローチやメタ分析を用いた今日からでも実践しながら活かせるノウハウが詰まった書籍の購入ができます。</h7>
\t\t\t<div class=\"text-center\">
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary \" href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/booklist.php\" role=\"button\">書籍一覧 &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/detail.php?id=";
        echo twig_escape_filter($this->env, ($context["book_id"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<img class=\"rounded-circle d-block mx-auto\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo "book/";
        echo twig_escape_filter($this->env, ($context["book_image"] ?? null), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"200\" height=\"200\">
\t\t\t</a>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">
\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t<h4 class=\"featurette-heading text-center\">
\t\t\t\t<span class=\"text-muted\">関連する商品</span>
\t\t\t</h4>
\t\t\t<h7>書籍にて紹介されている商品の購入が可能です。
\t\t\t\t\t\t\t\t弊社での取扱い商品はいずれもメーカー直仕入れの正規品でございます。安心してお買い求めいただけるようになっております</h7>
\t\t\t<div class=\"text-center\">
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary \" href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/sublist_all.php\" role=\"button\">関連商材一覧 &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t<a href=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/sub/detail.php?id=";
        echo twig_escape_filter($this->env, ($context["sub_id"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<img class=\"rounded-circle d-block mx-auto\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo "sub/";
        echo twig_escape_filter($this->env, ($context["sub_image"] ?? null), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"200\" height=\"200\">
\t\t\t</a>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h4 class=\"featurette-heading text-center\">
\t\t\t\t<span class=\"text-muted\">会員特典</span>
\t\t\t</h4>
\t\t\t<h7 class=\"text-center\">会員登録いただいたお客様からの購入は定価の３割引でお買い求めいただけます</h7>
\t\t\t<div class=\"text-center\">
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary text-center\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/regist.php\" role=\"button\">新規会員登録 &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<img class=\"rounded-circle d-block mx-auto\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/unnamed.jpeg\" alt=\"Generic placeholder image\" width=\"200\" height=\"200\">
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">
\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t<h4 class=\"featurette-heading text-center\">
\t\t\t\t<span class=\"text-muted\">会社概要</span>
\t\t\t</h4>
\t\t\t<p class=\"lead text-center\">会社名：合同会社 <br>HEALTH KNOWLEGE</p>
\t\t\t<p class=\"lead text-center\">代表者名：田中 正義</p>
\t\t\t<p class=\"lead text-center\">〒 000-9999</p>
\t\t\t<p class=\"lead text-center\">東京都千代田区丸の内 架空ビル32階</p>
\t\t</div>
\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.717639851197!2d139.7609893778801!3d35.680478120777906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbcd794975%3A0x239c242b7b27f6c9!2z5pel5pys44CB44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF!5e0!3m2!1sja!2sus!4v1621490719685!5m2!1sja!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h4 class=\"featurette-heading text-center\">
\t\t\t\t<span class=\"text-muted\">お問い合わせ</span>
\t\t\t</h4>
\t\t\t<form method=\"POST\" action=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/Contact/confirm.php\">
\t\t\t\t<p class=\"lead text-left\">お名前 *<input type=\"text\" class=\"border-4 border-info\" name=\"name\"></p>
\t\t\t\t<p class=\"lead text-left\">Email *<input type=\"email\" class=\"border-4 border-info\" name=\"email\"></p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<p>お問合せ内容 *</p>
\t\t\t\t<textarea class=\"border-4 border-info\" name=\"text\"></textarea>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary \">内容を確認する</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">
</div>

";
        // line 139
        $this->loadTemplate("common/footer.html.twig", "/index.html.twig", 139)->display($context);
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
        return array (  234 => 139,  216 => 124,  186 => 97,  178 => 92,  158 => 77,  152 => 76,  144 => 71,  124 => 56,  118 => 55,  110 => 50,  91 => 33,  78 => 26,  72 => 25,  67 => 23,  62 => 20,  58 => 19,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/index.html.twig", "/var/www/html/EC_shop/templates/index.html.twig");
    }
}
