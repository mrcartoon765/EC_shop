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

/* /shopping/pay_end.html.twig */
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
        echo " ";
        $this->loadTemplate("common/header.html.twig", "/shopping/pay_end.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php\">TOP</a></li>
                    <li><a href=\"cart.php\">カート</a></li>
                    <li>";
        // line 8
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>";
        // line 15
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"wrapper-body\">
                    <div class=\"thanks\">
                        <h4>";
        // line 19
        echo twig_escape_filter($this->env, ($context["result_comment"] ?? null), "html", null, true);
        echo "<h4>
                    </div>
                    <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
        // line 21
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php'\">トップページに戻る</button>
                </div>
            </div>
        </div>
    </main>
 ";
        // line 26
        $this->loadTemplate("common/footer.html.twig", "/shopping/pay_end.html.twig", 26)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/pay_end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  73 => 21,  68 => 19,  61 => 15,  51 => 8,  46 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/pay_end.html.twig", "/var/www/html/EC_shop/templates/shopping/pay_end.html.twig");
    }
}
