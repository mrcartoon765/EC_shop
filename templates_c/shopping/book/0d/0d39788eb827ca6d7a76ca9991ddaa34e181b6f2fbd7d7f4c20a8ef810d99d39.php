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

/* /shopping/book/Booklist.html.twig */
class __TwigTemplate_d7f5d8cde65e7bca8b80dc3b257df6ac474e4524336c16b44f55a2f7caf9666a extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/book/Booklist.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>BOOK</h3>
\t\t\t\t<p>書籍一覧</p>
\t\t\t</div>
\t\t</div>

\t<div class=\"itemlist\">
\t\t<ul>
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            echo "\t\t\t\t\t<li>
\t\t\t\t\t<form action=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\" class=\"item-form\" >
\t\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t<div class=\"item-body\">
\t\t\t\t\t\t<h5>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>価格　￥";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 21), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 22), 0, 40), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t<div class=\"item-form\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" name=\"count\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn- btn-primary\">カートに入れる</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</ul>
\t</div>
</main>
 ";
        // line 34
        $this->loadTemplate("common/footer.html.twig", "/shopping/book/Booklist.html.twig", 34)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/book/Booklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  100 => 31,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/book/Booklist.html.twig", "/var/www/html/EC_shop/templates/shopping/book/Booklist.html.twig");
    }
}
