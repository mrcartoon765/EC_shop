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

/* common/paging.html.twig */
class __TwigTemplate_17a3b6a39d307989e0992fd1558a8c5c32f7847c8eef9692850a7927ded15e46 extends \Twig\Template
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
        echo "<ul class=\"paging\">
\t<li>
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
        echo ".php?title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">« 最初</a>
\t</li>

\t";
        // line 6
        if ((($context["prev"] ?? null) != "")) {
            // line 7
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
            echo ".php?page=";
            echo twig_escape_filter($this->env, ($context["prev"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo " -1=\"-1\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        // line 11
        echo "
\t<li>
\t\t<span>";
        // line 13
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span>
\t</li>

\t";
        // line 16
        if ((($context["next"] ?? null) != "")) {
            // line 17
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
            echo ".php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        // line 21
        echo "\t<li>
\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
        echo ".php?page=";
        echo twig_escape_filter($this->env, ($context["pages"] ?? null), "html", null, true);
        echo "&title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">最後 »</a>
\t</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "common/paging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  101 => 21,  87 => 18,  84 => 17,  82 => 16,  76 => 13,  72 => 11,  56 => 8,  53 => 7,  51 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/paging.html.twig", "/var/www/html/EC_shop/templates/common/paging.html.twig");
    }
}
