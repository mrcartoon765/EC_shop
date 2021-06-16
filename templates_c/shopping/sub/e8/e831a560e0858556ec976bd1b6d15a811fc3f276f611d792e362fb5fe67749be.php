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

/* shopping/sub/sublist_all.html.twig */
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
        $this->loadTemplate("common/header.html.twig", "shopping/sub/sublist_all.html.twig", 1)->display($context);
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
\t\t";
        // line 12
        $context["a"] = 0;
        // line 13
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 14
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
            // line 15
            echo "\t\t\t\t";
            $this->loadTemplate("common/shopping/hidden_input.html.twig", "shopping/sub/sublist_all.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t<div class=\"card-group col-6 col-md-4 px-0\" style=\"width: 100%;\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<form action=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"POST\">
\t\t\t\t\t";
            // line 19
            $this->displayBlock('order_products', $context, $blocks);
            // line 23
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["this_dir"] ?? null), "html", null, true);
            echo "detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t<div class=\"card-text\">
\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t<h3>";
            // line 29
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 29)) > 30)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 29), 0, 30) . "...")) : (twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 29))), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"red\">価格 ￥";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 34)), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5>";
            // line 38
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 38)) > 40)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 38), 0, 40) . "...")) : (twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 38))), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t";
            // line 39
            $this->loadTemplate("common/shopping/hidden_input_cart_in.html.twig", "shopping/sub/sublist_all.html.twig", 39)->display($context);
            // line 40
            echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 44
            $this->loadTemplate("common/shopping/want_button.html.twig", "shopping/sub/sublist_all.html.twig", 44)->display($context);
            // line 45
            echo "
\t\t\t\t\t\t\t";
            // line 46
            $this->loadTemplate("common/cart_btn.html.twig", "shopping/sub/sublist_all.html.twig", 46)->display($context);
            // line 47
            echo "\t\t\t\t\t\t\t<br><br>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
            // line 52
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 53
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
        // line 54
        echo "
\t\t\t";
        // line 55
        $this->loadTemplate("common/paging.html.twig", "shopping/sub/sublist_all.html.twig", 55)->display($context);
        // line 56
        echo "
\t\t\t";
        // line 57
        $this->loadTemplate("common/shopping/hidden_input_end.html.twig", "shopping/sub/sublist_all.html.twig", 57)->display($context);
        // line 58
        echo "
\t\t</div>
\t</div>
</main>

";
        // line 63
        $this->loadTemplate("common/footer.html.twig", "shopping/sub/sublist_all.html.twig", 63)->display($context);
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t\t<h6>関連商品一覧</h6>
\t\t\t";
    }

    // line 19
    public function block_order_products($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t\t\t\t\t\t\t\t<input type=\"common/shopping/hidden_input_order_products.html.twig\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_image\" value=";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["value"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["image"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "shopping/sub/sublist_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 21,  203 => 20,  199 => 19,  194 => 9,  190 => 8,  186 => 63,  179 => 58,  177 => 57,  174 => 56,  172 => 55,  169 => 54,  155 => 53,  153 => 52,  146 => 47,  144 => 46,  141 => 45,  139 => 44,  133 => 40,  131 => 39,  127 => 38,  121 => 35,  117 => 34,  110 => 30,  106 => 29,  97 => 24,  89 => 23,  87 => 19,  83 => 18,  79 => 16,  76 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  49 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shopping/sub/sublist_all.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/sublist_all.html.twig");
    }
}
