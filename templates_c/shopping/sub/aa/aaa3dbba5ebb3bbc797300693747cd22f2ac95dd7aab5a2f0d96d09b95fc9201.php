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

/* /shopping/sub/sublist_ctg1_3.html.twig */
class __TwigTemplate_356a7d157802536e24c5a5bf75ab48680880f4e76890e6b9777532566c864244 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/sub/sublist_ctg1_3.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>Health Products</h3>
\t\t\t\t<p>関連商品一覧</p>
        <h3>";
        // line 8
        echo twig_escape_filter($this->env, ($context["ctg_title"] ?? null), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t</div>

\t<div class=\"itemlist\">
\t\t<ul>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 15
            echo "\t\t\t\t\t<li>
\t\t\t\t\t<form action=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\" class=\"item-form\" >
\t\t\t\t\t<img src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t<div class=\"item-body\">
\t\t\t\t\t\t<h5>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>価格　￥";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 23), 0, 40), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t<div class=\"item-form\">
            <input type=\"number\" name=\"count\" maxlength=\"1000\" step=\"1\" placeholder=\"購入数量\" style=\"width:150px;\">
            <br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">カートに入れる</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</ul>
\t</div>
</main>
 ";
        // line 36
        $this->loadTemplate("common/footer.html.twig", "/shopping/sub/sublist_ctg1_3.html.twig", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/sub/sublist_ctg1_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  105 => 33,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  67 => 17,  63 => 16,  60 => 15,  56 => 14,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/sublist_ctg1_3.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/sublist_ctg1_3.html.twig");
    }
}
