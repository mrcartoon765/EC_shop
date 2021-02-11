<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Booklist.html.twig */
class __TwigTemplate_405fd29f0e05a83e9d3bcd4b7617ca3f548850e0feb6196c9467898833a7e7d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"jp\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>BookList</title>
</head>
<body>
<div id=\"wrapper\">
";
        // line 10
        $this->loadTemplate("category_menu.html.twig", "Booklist.html.twig", 10)->display($context);
        // line 11
        echo "<div id=\"Book_list\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 13
            echo "<div class=\"Book\"></div>
<ul>

<li class=\"title\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?Book_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "Book_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", []), "html", null, true);
            echo "</a></a></li>

<li class=\"price\">&yen;";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
            echo "</li>

<li class=\"image\">
<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?Book_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "Book_id", []), "html", null, true);
            echo "\">

<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "image/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", []), "html", null, true);
            echo "\"></a></li>

<li class=\"detail\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?Book_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "Book_id", []), "html", null, true);
            echo "\"></a>詳細</li>

</ul>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
</div>
</body>
</html>";
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
        return array (  99 => 30,  86 => 25,  77 => 23,  70 => 21,  64 => 18,  55 => 16,  50 => 13,  46 => 12,  43 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "Booklist.html.twig", "/Applications/MAMP/htdocs/portforio/templates/shopping/Booklist.html.twig");
    }
}
