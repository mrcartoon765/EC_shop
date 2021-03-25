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

/* create_dm.html.twig */
class __TwigTemplate_c26b1af14bee07a7631336c3b985c4d9893b67744a87ef88da2c085b3082ec32 extends \Twig\Template
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

    <title>メルマガ作成</title>

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
                    <h3>メルマガ作成</h3>
                </div>
                <form class=\"edit-form\" method=\"POST\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/send_dm.php\">
                    <div class=\"form-group\">
                        <p>タイトル</p>
                        <input type=\"text\" name=\"title\" required>
                    </div>
                    <div class=\"form-group\">
                        <p>本文</p>
                        <textarea name=\"content\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-blue\">送信する</button>
                </form>
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
        return "create_dm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 37,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "create_dm.html.twig", "/var/www/html/EC_shop/templates/admin/create_dm.html.twig");
    }
}
