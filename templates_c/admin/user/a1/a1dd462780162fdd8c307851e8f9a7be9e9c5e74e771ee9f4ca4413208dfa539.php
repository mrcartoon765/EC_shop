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

/* /admin/user/send_dm.html.twig */
class __TwigTemplate_9a21cca09fee254a9b9390772b441df8551a8ff1cf32555e1343668cbd7e8a30 extends \Twig\Template
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
        echo "    ";
        $this->loadTemplate("common/header_admin.html.twig", "/admin/user/send_dm.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>";
        // line 6
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>
    </main>
 ";
        // line 11
        $this->loadTemplate("common/footer.html.twig", "/admin/user/send_dm.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/user/send_dm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  46 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/user/send_dm.html.twig", "/var/www/html/EC_shop/templates/admin/user/send_dm.html.twig");
    }
}
