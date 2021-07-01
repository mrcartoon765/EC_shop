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

/* /admin/book/Books.html.twig */
class __TwigTemplate_ef09e4e75f46772d33b5975031f0dc10f57726d1609226ba72f03a4a0f9c21e7 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/book/Books.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title text-center\">
\t\t\t\t<h3>書籍管理</h3>
\t\t\t</div>
\t\t\t<br>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='create_book_list.php'\">書籍を新規登録する</button>
\t\t\t<br><br>
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["books"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "\t\t\t\t<div class=\"card border-4 border-info\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/image/book/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" style=\"height:300px;width:230px;\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">書籍名</h5>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">価格:￥";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 21)), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\"></h5>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">説明文</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 24), 0, 40), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">発売日:";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">関連商材ID:";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"text-center col\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg\" onclick=\"location.href='";
            // line 34
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/edit_book.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "'\">編集</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center col\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete btn-lg\" data-id='";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "'>削除</button>

\t\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_books.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value='";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "' name=\"id\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t</div>
\t</div>
</div></div></main>";
        // line 51
        $this->loadTemplate("common/footer.html.twig", "/admin/book/Books.html.twig", 51)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/book/Books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  132 => 49,  118 => 41,  112 => 40,  107 => 38,  98 => 34,  87 => 26,  83 => 25,  79 => 24,  73 => 21,  69 => 20,  59 => 15,  54 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/book/Books.html.twig", "/var/www/html/EC_shop/templates/admin/book/Books.html.twig");
    }
}
