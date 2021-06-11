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

/* common/shopping/hidden_input_end.html.twig */
class __TwigTemplate_b6f87491b7b0da6e8fa4d21bd2072075d0cf216531e2ad2a759d6c09abc7e0e1 extends \Twig\Template
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
        echo "\t\t<input type=\"hidden\" id=\"for_count_end\" value=";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo ">


";
        // line 6
        echo "\t\t<input type=\"hidden\" id=\"want_list_end\" value=";
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo ">";
    }

    public function getTemplateName()
    {
        return "common/shopping/hidden_input_end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/shopping/hidden_input_end.html.twig", "/var/www/html/EC_shop/templates/common/shopping/hidden_input_end.html.twig");
    }
}
