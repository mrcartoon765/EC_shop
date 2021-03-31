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

/* Booklist.html.twig */
class __TwigTemplate_cce002a00336a1e10884ca72739ea50e2bcb3b01bd756235f8f40dd1bcc55c39 extends \Twig\Template
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
        echo "<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>BOOK</h3>
\t\t\t\t<p>書籍一覧</p>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"text\" name=\"title\" placeholder=\"名前検索\">
\t\t<button type=\"submit\" class=\"btn btn-blue\">検索</button>
\t</form>
\t<div class=\"itemlist\">
\t\t<ul>
\t\t<li>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Book_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 17
            echo "\t\t\t\t\t<form action=\"../../shopping/Booklist.php\" method=\"POST\" class=\"item-form\" >
\t\t\t\t\t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::BOOK_IMAGE_DIR"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"item-body\">
\t\t\t\t\t\t<h5>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<input type=\"hidden\" name=\"Book_title\" value=";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>価格　￥";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<input type=\"hidden\" name=\"Book_price\" value=";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 23), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 24), 0, 40), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t<div class=\"item-form\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" name=\"Book_count\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-sm btn-blue\">カートに入れる</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</li>
\t\t</ul>
\t</div>
</main>";
    }

    public function getTemplateName()
    {
        return "Booklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  61 => 18,  58 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Booklist.html.twig", "/var/www/html/EC_shop/templates/shopping/Booklist.html.twig");
    }
}