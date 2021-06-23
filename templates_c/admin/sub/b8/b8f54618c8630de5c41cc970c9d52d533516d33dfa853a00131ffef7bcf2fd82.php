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
<form method=\"POST\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/delete_sub.php\" id=\"delete_form_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
\t<input type=\"hidden\" value='";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "' name=\"id\">
</form>

<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title text-center\">
\t\t\t\t<h3>副商材編集</h3>
\t\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["file_name"] ?? null), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<form class=\"d-flex\" type=\"search\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/sub/secondary_products.php\" method=\"GET\">
\t\t\t\t<input class=\"form-control me-2 border-4 border-info\" type=\"search\" name=\"title\" placeholder=\"全商品名から検索\">
\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='";
        // line 18
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/create_sub.php'\">副商材を新規登録する</button>

\t\t\t<div class=\"itemlist\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 24
            echo "\t\t\t\t\t\t\t";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 24);
            // line 25
            echo "\t\t\t\t\t\t\t";
            $context["ctg_id"] = twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 25);
            // line 26
            echo "\t\t\t\t\t\t\t";
            $context["ctg1"] = twig_get_attribute($this->env, $this->source, $context["value"], "ctg1", [], "any", false, false, false, 26);
            // line 27
            echo "\t\t\t\t\t\t\t";
            $context["ctg2"] = twig_get_attribute($this->env, $this->source, $context["value"], "ctg2", [], "any", false, false, false, 27);
            // line 28
            echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"card-group col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"card border-4 border-info\" style=\"height:100%;\">
\t\t\t\t\t\t\t\t\t<div class=\"column flex-direction:row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["APP_DIR"] ?? null), "html", null, true);
            echo "/shopping/image/sub/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>商品ID:";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>価格:￥";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 41)), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">

\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">商品名:";
            // line 48
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 48), 0, 30), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">

\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">商品説明:";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 52), 0, 40), "html", null, true);
            echo "...</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">発売日:";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 55), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h8></h8>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">関連書籍</h8>
\t\t\t\t\t\t\t\t\t\t\t\t:";
            // line 60
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["ctg_id_array"] ?? null), ($context["ctg_id"] ?? null), [], "any", false, false, false, 60)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-right border-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">関連カテゴリ</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 67
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["ctg1_array"] ?? null), ($context["ctg1"] ?? null), [], "any", false, false, false, 67)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">目的カテゴリ</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["ctg2_array"] ?? null), ($context["ctg2"] ?? null), [], "any", false, false, false, 74)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg\" onclick=\"location.href='";
            // line 82
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/edit_sub.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-lg delete\" data-id='";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "'>削除</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_sub.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "' name=\"id\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-title\">最終更新日時<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h8 class=\"card-text\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "last_update", [], "any", false, false, false, 96), "html", null, true);
            echo "</h8>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 106
        $this->loadTemplate("common/paging.html.twig", "/admin/sub/secondary_products.html.twig", 106)->display($context);
        // line 107
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 112
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/secondary_products.html.twig", 112)->display($context);
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
        return array (  237 => 112,  230 => 107,  228 => 106,  224 => 104,  210 => 96,  200 => 89,  194 => 88,  190 => 87,  180 => 82,  169 => 74,  159 => 67,  149 => 60,  141 => 55,  135 => 52,  128 => 48,  118 => 41,  112 => 38,  102 => 33,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  79 => 23,  71 => 18,  64 => 14,  59 => 12,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/secondary_products.html.twig", "/var/www/html/EC_shop/templates/admin/sub/secondary_products.html.twig");
    }
}
