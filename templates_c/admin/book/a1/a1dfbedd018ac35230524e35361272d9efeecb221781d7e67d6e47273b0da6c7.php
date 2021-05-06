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

/* /admin/book/books.html.twig */
class __TwigTemplate_1a415e3b404cf8e3d4290c33fbcac4f21191b2bd747c66512934860a5c01c40b extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/book/books.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>書籍管理</h3>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='create_Book_list.php'\">書籍を新規登録する</button>
\t\t\t<div class=\"list\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>書籍ID</th>
\t\t\t\t\t\t\t<th>タイトル</th>
\t\t\t\t\t\t\t<th>説明文</th>
\t\t\t\t\t\t\t<th>価格</th>
\t\t\t\t\t\t\t<th>画像</th>
\t\t\t\t\t\t\t<th>発売日</th>
\t\t\t\t\t\t\t<th>関連商材ID</th>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Books"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 25
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"d-inline-block text-truncate\" style=\"max-width: 50px;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/image/book/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"\"></td>
\t\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 36
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/edit_book.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "'\">編集</button>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "'>削除</button>

\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_Books.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "' name=\"id\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 52
        $this->loadTemplate("common/footer.html.twig", "/admin/book/books.html.twig", 52)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/book/books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  132 => 46,  121 => 41,  115 => 40,  110 => 38,  103 => 36,  98 => 34,  94 => 33,  88 => 32,  84 => 31,  79 => 29,  74 => 27,  70 => 26,  67 => 25,  63 => 24,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/book/books.html.twig", "/var/www/html/EC_shop/templates/admin/book/books.html.twig");
    }
}
