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

/* /admin/user/users.html.twig */
class __TwigTemplate_76ad8f0e5165d3d75c8cd523f7976b369608462e30a6cfe4054f69a0185d4b58 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/user/users.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title text-center\">
\t\t\t\t<h3>会員管理</h3>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn btn-secondary\" onclick=\"location.href='";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "download.php'\">CSV出力</button>
\t\t\t<br>
\t\t\t\t<p></p><br>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<form class=\"serch\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "users.php\" method=\"GET\">
\t\t\t\t\t\t\t<input class=\"border-4 border-info\" type=\"text\" name=\"first_name\" placeholder=\"名前検索\"><br><br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">名前検索</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<form class=\"serch\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "users.php\" method=\"GET\">
\t\t\t\t\t\t\t<input class=\"border-4 border-info\" type=\"text\" name=\"mail\" placeholder=\"メールアドレス検索\"><br><br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">アドレス検索</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"list\">
\t\t\t\t\t<table class=\"sort-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"text-center border border-3 border-info bg-secondary text-light\">id</th>
\t\t\t\t\t\t\t\t<th class=\"text-center border border-3 border-info bg-secondary text-light\">名前</th>
\t\t\t\t\t\t\t\t<th class=\"text-center border border-3 border-info bg-secondary text-light\">メールアドレス</th>
\t\t\t\t\t\t\t\t<th class=\"text-center border border-3 border-info bg-secondary text-light\">DM配信</th>
\t\t\t\t\t\t\t\t<th class=\"text-center border border-3 border-info bg-secondary text-light\">操作</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "family_name", [], "any", false, false, false, 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "first_name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "mail", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "dm", [], "any", false, false, false, 42) == 1)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">受信する</td>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">受信しない</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 48
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "edit_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "'>削除</button>
\t\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_user.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "' name=\"id\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t";
        // line 60
        $this->loadTemplate("common/paging.html.twig", "/admin/user/users.html.twig", 60)->display($context);
        // line 61
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 66
        $this->loadTemplate("common/footer.html.twig", "/admin/user/users.html.twig", 66)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/user/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 66,  154 => 61,  152 => 60,  146 => 56,  135 => 51,  129 => 50,  125 => 49,  119 => 48,  116 => 47,  112 => 45,  108 => 43,  106 => 42,  102 => 41,  96 => 40,  92 => 39,  89 => 38,  85 => 37,  64 => 19,  55 => 13,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/user/users.html.twig", "/var/www/html/EC_shop/templates/admin/user/users.html.twig");
    }
}
