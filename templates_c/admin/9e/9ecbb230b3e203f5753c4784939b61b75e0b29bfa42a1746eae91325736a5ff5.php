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

/* send_dm.html.twig */
class __TwigTemplate_9cff36bc5bc9a15f8ebaeca92936cd66175bcf7b5688db1959e4237f6dd6d6fb extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>メルマガ配信</title>

    <link rel=\"icon\" href=\"favicon.ico\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::CSS_FILE"), "html", null, true);
        echo "\" rel=\"stylesheet\">    
    </head>

<body>
    <header>
        <div class=\"container\">
            <div class=\"header-logo\">
                <h1><a href=\"dashboard.php\">管理画面</a></h1>
            </div>

            <nav class=\"menu-right menu\">
                <a href=\"logout.php\">ログアウト</a>
            </nav>
        </div>
    </header>
    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>";
        // line 35
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class=\"container\">
            <p>Copyright @ 2018 SQUARE, inc</p>
        </div>
    </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "send_dm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "send_dm.html.twig", "/var/www/html/EC_shop/templates/admin/send_dm.html.twig");
    }
}
