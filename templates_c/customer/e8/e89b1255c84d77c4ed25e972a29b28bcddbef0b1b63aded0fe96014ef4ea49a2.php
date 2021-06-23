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

/* /customer/want_list.html.twig */
class __TwigTemplate_276e5e970814b84d85003fa2628d6f9487380ad35097596f89898c6c1c5dbd77 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/customer/want_list.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"container-fluid\">
\t\t<br><br><br>
\t\t<div class=\"wrapper-title\">
\t\t\t<h2>Health Products</h2>
\t\t\t<h6>欲しい！リスト一覧</h6>
\t\t</div>
\t\t";
        // line 9
        $context["a"] = 0;
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 11
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
            // line 12
            echo "\t\t\t\t<div class='text-center'>

\t\t\t\t\t";
            // line 14
            $this->loadTemplate("common/shopping/hidden_input.html.twig", "/customer/want_list.html.twig", 14)->display($context);
            // line 15
            echo "
\t\t\t\t\t<div class=\"card\" style=\"max-width: 100%;\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "/image/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "table_name", [], "any", false, false, false, 19), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "want_product_image", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"img\">
\t\t\t\t\t\t\t\t<form action=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "want_list.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"delete\" value=\"YES\">
\t\t\t\t\t\t\t\t\t";
            // line 23
            $this->loadTemplate("common/shopping/hidden_input_order_products.html.twig", "/customer/want_list.html.twig", 23)->display($context);
            // line 24
            echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\">削除する</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "table_name", [], "any", false, false, false, 30), "html", null, true);
            echo "/detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"want_list_title";
            // line 32
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\"></h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"want_list_price";
            // line 38
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-heart fa-1x px-16 fas active\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"want_list_want_sum";
            // line 49
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<small class=\"text\">

\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            $this->loadTemplate("common/cart_btn.html.twig", "/customer/want_list.html.twig", 58)->display($context);
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_id"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_image\" value=";
            // line 60
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["value"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["want_product_image"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"table_name\" value=";
            // line 61
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["value"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["table_name"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"want_list_table\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "table_name", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"want_list_id\" value=";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_id", [], "any", false, false, false, 63), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 75
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 76
            echo "\t\t\t<br>
\t\t";
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
        // line 78
        echo "
\t\t";
        // line 79
        $this->loadTemplate("common/shopping/hidden_input_end.html.twig", "/customer/want_list.html.twig", 79)->display($context);
        // line 80
        echo "
\t\t";
        // line 81
        $this->loadTemplate("common/paging.html.twig", "/customer/want_list.html.twig", 81)->display($context);
        // line 82
        echo "
\t</main>
\t";
        // line 84
        $this->loadTemplate("common/footer.html.twig", "/customer/want_list.html.twig", 84)->display($context);
        // line 85
        echo "
";
    }

    public function getTemplateName()
    {
        return "/customer/want_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 85,  220 => 84,  216 => 82,  214 => 81,  211 => 80,  209 => 79,  206 => 78,  191 => 76,  189 => 75,  174 => 63,  170 => 62,  166 => 61,  162 => 60,  157 => 59,  155 => 58,  151 => 57,  140 => 49,  126 => 38,  117 => 32,  109 => 30,  101 => 24,  99 => 23,  94 => 21,  90 => 20,  82 => 19,  76 => 15,  74 => 14,  70 => 12,  53 => 11,  50 => 10,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/customer/want_list.html.twig", "/var/www/html/EC_shop/templates/customer/want_list.html.twig");
    }
}
