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

/* /shopping/sub/sublist_all.html.twig */
class __TwigTemplate_bcc71d35b18d571e97537333a3d7a7651593d7cafa745e76fb68ee23c11eeaba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'order_products' => [$this, 'block_order_products'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("common/header.html.twig", "/shopping/sub/sublist_all.html.twig", 1)->display($context);
        // line 2
        echo "
<main>
\t<div class=\"container-fluid\">
\t\t<br><br><br>
\t\t<div class=\"wrapper-title\">
\t\t\t<h2>Health Products</h2>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</div>
\t\t<h3 class=\"text-center\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["no_product"] ?? null), "html", null, true);
        echo "</h3>
\t\t";
        // line 13
        $context["a"] = 0;
        // line 14
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 16
            echo "\t\t\t\t";
            $this->loadTemplate("common/shopping/hidden_input.html.twig", "/shopping/sub/sublist_all.html.twig", 16)->display($context);
            // line 17
            echo "\t\t\t\t<div class=\"card-group col-6 col-md-4 px-0\" style=\"width: 100%;\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<form action=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"POST\">
\t\t\t\t\t";
            // line 20
            $this->displayBlock('order_products', $context, $blocks);
            // line 24
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["this_dir"] ?? null), "html", null, true);
            echo "detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 25), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t<div class=\"card-text\">
\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t<h3>";
            // line 30
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 30)) > 30)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 30), 0, 30) . "...")) : (twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 30))), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"red\">価格 ￥";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 35)), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 36), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5>";
            // line 39
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 39)) > 40)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 39), 0, 40) . "...")) : (twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 39))), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t";
            // line 40
            $this->loadTemplate("common/shopping/hidden_input_cart_in.html.twig", "/shopping/sub/sublist_all.html.twig", 40)->display($context);
            // line 41
            echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 45
            $this->loadTemplate("common/shopping/want_button.html.twig", "/shopping/sub/sublist_all.html.twig", 45)->display($context);
            // line 46
            echo "
\t\t\t\t\t\t\t";
            // line 47
            $this->loadTemplate("common/cart_btn.html.twig", "/shopping/sub/sublist_all.html.twig", 47)->display($context);
            // line 48
            echo "\t\t\t\t\t\t\t<br><br>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
            // line 53
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 54
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
\t\t\t";
        // line 56
        $this->loadTemplate("common/paging.html.twig", "/shopping/sub/sublist_all.html.twig", 56)->display($context);
        // line 57
        echo "
\t\t\t";
        // line 58
        $this->loadTemplate("common/shopping/hidden_input_end.html.twig", "/shopping/sub/sublist_all.html.twig", 58)->display($context);
        // line 59
        echo "
\t\t</div>
\t</div>
</main>

";
        // line 64
        $this->loadTemplate("common/footer.html.twig", "/shopping/sub/sublist_all.html.twig", 64)->display($context);
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t\t<h6>関連商品一覧</h6>
\t\t\t";
    }

    // line 20
    public function block_order_products($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t\t\t\t\t\t\t\t<input type=\"common/shopping/hidden_input_order_products.html.twig\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_image\" value=";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["value"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["image"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "/shopping/sub/sublist_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 22,  207 => 21,  203 => 20,  198 => 9,  194 => 8,  190 => 64,  183 => 59,  181 => 58,  178 => 57,  176 => 56,  173 => 55,  159 => 54,  157 => 53,  150 => 48,  148 => 47,  145 => 46,  143 => 45,  137 => 41,  135 => 40,  131 => 39,  125 => 36,  121 => 35,  114 => 31,  110 => 30,  101 => 25,  93 => 24,  91 => 20,  87 => 19,  83 => 17,  80 => 16,  63 => 15,  60 => 14,  58 => 13,  54 => 12,  51 => 11,  49 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/sublist_all.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/sublist_all.html.twig");
    }
}
