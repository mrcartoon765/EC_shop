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

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 10
        $context["ctg1"] = [1 => "食品", 2 => "サプリ", 3 => "ガジェット", 4 => "家具・寝具", 5 => "美容品"];
        // line 11
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["ctg2"] = [1 => "ストレス対策", 2 => "アンチエイジング", 3 => "集中力改善", 4 => "睡眠改善", 5 => "ダイエット"];
        // line 12
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["books"] = [1 => "超ストレス解消法", 2 => "最高の体調", 3 => "【新装版】一生リバウンドしないパレオダイエットの教科書", 4 => "ヤバい集中力　１日ブッ通しで頭が冴えわたる神ライフハック45", 5 => "科学的な適職", 6 => "不老長寿メソッド　死ぬまで若いは武器になる"];
        // line 13
        echo "
<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>副商材編集</h3>
\t\t\t\t<p>";
        // line 19
        echo twig_escape_filter($this->env, ($context["file_name"] ?? null), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<form class=\"d-flex\" type=\"search\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/sub/secondary_products.php\" method=\"GET\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" name=\"title\" placeholder=\"全商品名から検索\">
\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t\t<button type=\"button\" class=\"btn btn-blue\" onclick=\"location.href='";
        // line 25
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/create_sub.php'\">副商材を新規登録する</button>

\t\t\t<div class=\"itemlist\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 31
            echo "\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card-deck\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"column flex-direction:row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["APP_DIR"] ?? null), "html", null, true);
            echo "/shopping/image/sub/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" alt=\"title\" onerror=\"this.style.display='none'\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>商品ID:";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>価格:￥";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">商品名</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">商品説明</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 50), 0, 40), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">発売日</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">最終更新日時</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "last_update", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>

\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">関連書籍</h8>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">・";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["books"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg1", [], "any", false, false, false, 57), [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>関連カテゴリ</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>・";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg1"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg1", [], "any", false, false, false, 61), [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>目的別カテゴリ</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>・";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg2"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg2", [], "any", false, false, false, 65), [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 68
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/edit_sub.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "'>削除</button>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_sub.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "' name=\"id\">
\t\t\t\t\t\t\t\t\t\t\t\t</form>
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
        // line 79
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"paging\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "secondary_products.php?title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">« 最初</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 87
        if ((($context["prev"] ?? null) != "")) {
            // line 88
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 89
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "secondary_products.php?page=";
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
        // line 92
        echo "
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>";
        // line 94
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 97
        if ((($context["next"] ?? null) != "")) {
            // line 98
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 99
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "secondary_products.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 102
        echo "
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/secondary_products.php?page=";
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
        // line 111
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/secondary_products.html.twig", 111)->display($context);
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
        return array (  282 => 111,  268 => 104,  264 => 102,  252 => 99,  249 => 98,  247 => 97,  241 => 94,  237 => 92,  223 => 89,  220 => 88,  218 => 87,  210 => 84,  203 => 79,  189 => 71,  183 => 70,  179 => 69,  173 => 68,  167 => 65,  160 => 61,  153 => 57,  147 => 54,  142 => 52,  137 => 50,  132 => 48,  124 => 43,  118 => 40,  109 => 36,  102 => 31,  98 => 30,  90 => 25,  83 => 21,  78 => 19,  70 => 13,  67 => 12,  64 => 11,  62 => 10,  56 => 7,  50 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/secondary_products.html.twig", "/var/www/html/EC_shop/templates/admin/sub/secondary_products.html.twig");
    }
}
