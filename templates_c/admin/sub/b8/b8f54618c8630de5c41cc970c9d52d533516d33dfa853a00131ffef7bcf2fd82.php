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

/* /admin/sub/secondary_products.html.twig */
class __TwigTemplate_7565a5ae34655b6fda50b9086812ea38f261568df32621e740a39cf22775c96c extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/secondary_products.html.twig", 1)->display($context);
        // line 2
        echo "
<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
        // line 3
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/edit_sub.php?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "'\">編集</button>


<form method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/delete_sub.php\" id=\"delete_form_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
\t<input type=\"hidden\" value='";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "' name=\"id\">
</form>

<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>副商材編集</h3>
\t\t\t\t<p></p>
\t\t\t</div>

\t\t\t<div class=\"itemlist\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sub"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 22
            echo "\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card-deck\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"column flex-direction:row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["APP_DIR"] ?? null), "html", null, true);
            echo "/shopping/image/sub/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 27), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">商品ID:</h8>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">価格:</h8>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">￥";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">商品名</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">商品説明</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 37), 0, 40), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">発売日</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">最終更新日時</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "update", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                                                ";
            // line 42
            $context["books"] = [1 => "超ストレス解消法", 2 => "最高の体調", 3 => "【新装版】一生リバウンドしないパレオダイエットの教科書", 4 => "ヤバい集中力　１日ブッ通しで頭が冴えわたる神ライフハック45", 5 => "科学的な適職", 6 => "不老長寿メソッド　死ぬまで若いは武器になる"];
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">関連書籍</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["books"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg1", [], "any", false, false, false, 44), [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                                                ";
            // line 45
            $context["ctg1"] = [1 => "食品", 2 => "サプリ", 3 => "ガジェット", 4 => "家具・寝具", 5 => "美容品"];
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">関連商品カテゴリ</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg1"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg1", [], "any", false, false, false, 47), [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                                                ";
            // line 48
            $context["ctg2"] = [1 => "ストレス対策", 2 => "アンチエイジング", 3 => "集中力改善", 4 => "睡眠改善", 5 => "ダイエット"];
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">目的別商品カテゴリ</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg2"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg2", [], "any", false, false, false, 50), [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 51
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/edit_sub.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "'>削除</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 141
        echo "

\t\t\t\t";
        // line 155
        echo "
\t\t\t\t<ul class=\"paging\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 158
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "sublist_all.php?title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">« 最初</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 161
        if ((($context["prev"] ?? null) != "")) {
            // line 162
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 163
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "sublist_all.php?page=";
            echo twig_escape_filter($this->env, ($context["prev"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo " -1=\"-1\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>";
        // line 168
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 171
        if ((($context["next"] ?? null) != "")) {
            // line 172
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 173
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "sublist_all.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 176
        echo "
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 178
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/sublist_all.php?page=";
        echo twig_escape_filter($this->env, ($context["pages"] ?? null), "html", null, true);
        echo "&title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">最後 »</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 185
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/secondary_products.html.twig", 185)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/sub/secondary_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 185,  240 => 178,  236 => 176,  224 => 173,  221 => 172,  219 => 171,  213 => 168,  209 => 166,  195 => 163,  192 => 162,  190 => 161,  182 => 158,  177 => 155,  173 => 141,  168 => 59,  155 => 52,  149 => 51,  145 => 50,  142 => 49,  140 => 48,  136 => 47,  133 => 46,  131 => 45,  127 => 44,  124 => 43,  122 => 42,  118 => 41,  113 => 39,  108 => 37,  103 => 35,  97 => 32,  92 => 30,  84 => 27,  77 => 22,  73 => 21,  56 => 7,  50 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/secondary_products.html.twig", "/var/www/html/EC_shop/templates/admin/sub/secondary_products.html.twig");
    }
}
