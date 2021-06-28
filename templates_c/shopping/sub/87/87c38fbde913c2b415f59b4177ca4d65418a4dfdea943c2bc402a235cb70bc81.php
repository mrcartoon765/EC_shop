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

/* common/shopping/hidden_input.html.twig */
class __TwigTemplate_2a678eb8134d04ec20529c62dff29ff4e90da726d06fe5397297723550ef4de2 extends \Twig\Template
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
        // line 2
        echo "<input type=\"hidden\" id=\"for_count0\" value=";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo ">


";
        // line 6
        echo "<input type=\"hidden\" id=\"product_id";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">

";
        // line 9
        echo "<input type=\"hidden\" id=\"product_id";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "product_id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">


";
        // line 13
        echo "<input type=\"hidden\" id=\"table";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "table_name", [], "any", false, false, false, 13), "html", null, true);
        echo "\">


";
        // line 17
        echo "<input type=\"hidden\" id=\"want_list_id";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\" value=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "product_id", [], "any", false, false, false, 17), "html", null, true);
        echo ">


";
        // line 21
        echo "<input type=\"hidden\" id=\"want_list_count0\" value=";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo ">


";
        // line 25
        echo "<input type=\"hidden\" id=\"want_list_table";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\" value=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "table_name", [], "any", false, false, false, 25), "html", null, true);
        echo ">


";
        // line 29
        echo "<input type=\"hidden\" id=\"want_list_count_no";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\" value=";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo ">


";
        // line 33
        echo "<input type=\"hidden\" id=\"img_dir\" value=";
        echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
        echo ">


";
        // line 37
        echo "<input type=\"hidden\" id=\"title\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "\">


";
        // line 41
        echo "<input type=\"hidden\" name=\"price\" value=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "price", [], "any", false, false, false, 41), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "common/shopping/hidden_input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  111 => 37,  104 => 33,  95 => 29,  86 => 25,  79 => 21,  70 => 17,  61 => 13,  52 => 9,  44 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/shopping/hidden_input.html.twig", "/var/www/html/EC_shop/templates/common/shopping/hidden_input.html.twig");
    }
}
