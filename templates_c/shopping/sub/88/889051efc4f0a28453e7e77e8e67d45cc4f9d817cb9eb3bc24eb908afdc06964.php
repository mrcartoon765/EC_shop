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

/* common/shopping/want_button.html.twig */
class __TwigTemplate_d40971cf5f9286d03decbf0a104171cbad712222d32fc8908e2d612c1ad898a5 extends \Twig\Template
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
        echo "<div class=\"card-footer text-center\">
\t<small class=\"text\">
\t\t";
        // line 3
        if ((($context["login"] ?? null) == true)) {
            // line 4
            echo "
\t\t\t<section class=\"post\" data-want=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\" data-table=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "table_name", [], "any", false, false, false, 5), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\" data-no=\"";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"btn-want\">
\t\t\t\t\t<div class=\"btn_want_status";
            // line 7
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\"></div>
\t\t\t\t\t<span></span>
\t\t\t\t\t<div id=\"active\"></div>
\t\t\t\t\t<div></div>
\t\t\t\t\t<i></i>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
        } else {
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t\t<br>

\t\t<h5>
\t\t\t<div id=\"hosii_sum";
        // line 20
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\"></div>
\t\t</h5>
\t</small>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/shopping/want_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  72 => 17,  69 => 16,  57 => 7,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/shopping/want_button.html.twig", "/var/www/html/EC_shop/templates/common/shopping/want_button.html.twig");
    }
}
