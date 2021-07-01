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

/* /admin/news/news.html.twig */
class __TwigTemplate_d3997cd5b9098a67306726723adb3b76f04ebf627704908b7a918c8ba02e1c14 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/news/news.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title text-center\">
\t\t\t\t<h3>記事管理</h3>
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='create_news.php'\">新規投稿する</button>
\t\t\t</div>
\t\t\t<div class=\"list\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table sort-table border border-3 border-info\">
\t\t\t\t\t<thead class=\"border border-3 border-info table-primary\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"text-center border border-3 border-info bg-secondary text-light\">　id　</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"text-center border border-3 border-info bg-secondary text-light\">タイトル</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"text-center border border-3 border-info bg-secondary text-light\">　本文　</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"text-center border border-3 border-info bg-secondary text-light\">更新日時</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"text-center border border-3 border-info bg-secondary text-light\">作成日時</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"text-center border border-3 border-info bg-secondary text-light\">　操作　</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 26
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"border border-3 border-info text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"border border-3 border-info text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"border border-3 border-info text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 29), 0, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"border border-3 border-info text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "updated_at", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"border border-3 border-info text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "created_at", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"border border-3 border-info text-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 33
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "edit_news.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "'>削除</button>
\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "delete_news.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "' name=\"id\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 48
        $this->loadTemplate("common/footer.html.twig", "/admin/news/news.html.twig", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/news/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  119 => 41,  108 => 36,  102 => 35,  98 => 34,  92 => 33,  87 => 31,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  68 => 26,  64 => 25,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/news/news.html.twig", "/var/www/html/EC_shop/templates/admin/news/news.html.twig");
    }
}
