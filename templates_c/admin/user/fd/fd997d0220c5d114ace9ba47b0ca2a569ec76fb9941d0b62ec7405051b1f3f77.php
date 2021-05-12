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
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>会員管理</h3>
\t\t\t</div>
\t\t\t<button type=\"button\" class='btn btn-primary' onclick=\"location.href='";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "create_dm.php'\">メルマガ配信</button>
\t\t\t<button type=\"button\" class=\"btn btn-secondary\" onclick=\"location.href='";
        // line 9
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "download.php'\">CSV出力</button>
\t\t\t<form class=\"serch\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "users.php\" method=\"GET\">
\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"名前検索\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">検索</button>
\t\t\t</form>
\t\t\t<div class=\"list\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t<th>名前</th>
\t\t\t\t\t\t\t<th>メールアドレス</th>
\t\t\t\t\t\t\t<th>DM配信</th>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 27
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "first_name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "mail", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "dm", [], "any", false, false, false, 31) == 1)) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t<td>受信する</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t<td>受信しない</td>
\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 37
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "edit_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "' >削除</button>
\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_user.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "'  name=\"id\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<ul class=\"paging\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "users.php?first_name=";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">« 最初</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 54
        if ((($context["prev"] ?? null) != "")) {
            // line 55
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "users.php?page=";
            echo twig_escape_filter($this->env, ($context["prev"] ?? null), "html", null, true);
            echo "&first_name=";
            echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo " -1=\"-1\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 59
        echo "
\t\t\t\t<li>
\t\t\t\t\t<span>";
        // line 61
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t</li>

\t\t\t\t";
        // line 64
        if ((($context["next"] ?? null) != "")) {
            // line 65
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "users.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&first_name=";
            echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 69
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/users.php?page=";
        echo twig_escape_filter($this->env, ($context["pages"] ?? null), "html", null, true);
        echo "&first_name=";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">最後 »</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div></main>";
        // line 76
        $this->loadTemplate("common/footer.html.twig", "/admin/user/users.html.twig", 76)->display($context);
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
        return array (  211 => 76,  199 => 71,  195 => 69,  183 => 66,  180 => 65,  178 => 64,  172 => 61,  168 => 59,  154 => 56,  151 => 55,  149 => 54,  141 => 51,  133 => 45,  122 => 40,  116 => 39,  112 => 38,  106 => 37,  103 => 36,  99 => 34,  95 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  78 => 27,  74 => 26,  55 => 10,  51 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/user/users.html.twig", "/var/www/html/EC_shop/templates/admin/user/users.html.twig");
    }
}
