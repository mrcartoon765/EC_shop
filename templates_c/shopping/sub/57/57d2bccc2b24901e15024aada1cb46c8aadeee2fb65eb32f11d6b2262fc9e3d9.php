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

/* common/cart_btn.html.twig */
class __TwigTemplate_4a55a71ea2f7f296b57eceeb6f0b5e2ab4b96d6801b869eff7123a367a6b31ae extends \Twig\Template
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
        echo "<div class=\"row\">
\t<div class=\"col px-2\">
\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-success\" data-cal=\"1\" data-target=\".counter";
        // line 3
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\">
\t</div>
\t<div class=\"col px-2\">
\t\t<input type=\"number\" name=\"count\" data-max=\"100\" data-min=\"0\" step=\"1\" placeholder=\"数量を入力\" class=\"counter";
        // line 6
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo " border-4 border-info\">
\t</div>
\t<div class=\"col px-2\">
\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-success\" data-cal=\"-1\" data-target=\".counter";
        // line 9
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo "\">
\t\t<br><br>
\t</div>
</div>

<div class=\"d-none d-sm-block\">
\t<button type=\"submit\" class=\"btn-success\">カートに入れる</button>
</div>
<div class=\"d-block d-sm-none\">
\t<button type=\"submit\" class=\"btn btn-link\">
\t\t<i type=\"submit\" class=\"fas fa-shopping-cart fa-2x\"></i>
\t</button>
\t<input type=\"hidden\" name=\"cart_in_status\" value=\"1\">
</div>";
    }

    public function getTemplateName()
    {
        return "common/cart_btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/cart_btn.html.twig", "/var/www/html/EC_shop/templates/common/cart_btn.html.twig");
    }
}
