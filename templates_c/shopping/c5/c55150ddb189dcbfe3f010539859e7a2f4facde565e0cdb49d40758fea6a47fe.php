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

/* pay_end.html.twig */
class __TwigTemplate_7db3a8e5edfa727edbe86f647a6a1289ed7480a94db2e11d37724cfb57c4ca4e extends \Twig\Template
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
        echo " <main>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"index.php\">TOP</a></li>
                    <li><a href=\"cart.php\">カート</a></li>
                    <li>";
        // line 7
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>";
        // line 14
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"wrapper-body\">
                    <div class=\"thanks\">
                        <h4>";
        // line 18
        echo twig_escape_filter($this->env, ($context["result_comment"] ?? null), "html", null, true);
        echo "<h4>
                    </div>
                    <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='../../index.php'\">トップページに戻る</button>
                </div>
            </div>
        </div>
    </main>";
    }

    public function getTemplateName()
    {
        return "pay_end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  55 => 14,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pay_end.html.twig", "/var/www/html/EC_shop/templates/shopping/pay_end.html.twig");
    }
}
