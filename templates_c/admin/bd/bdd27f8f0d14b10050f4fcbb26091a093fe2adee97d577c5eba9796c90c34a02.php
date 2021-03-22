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

/* dashboard.html.twig */
class __TwigTemplate_38fc33f528a3fd5f7f5bd2e8b69505d4dba02e21fde425e300a0aea65d558194 extends \Twig\Template
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

    <title>ダッシュボード</title>

    <link rel=\"icon\" href=\"favicon.ico\">
    <a href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"><link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\"></a>

    <i class=\"far fa-newspaper\"></i>

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::CSS_FILE"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <header>
        <div class=\"container\">
            <div class=\"header-logo\">
                <h1><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/admin/dashboard.php\">管理画面</a></h1>
            </div>

            <nav class=\"menu-right menu\">
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/admin/logout.php\">ログアウト</a>
            </nav>
        </div>
    </header>
    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>ダッシュボード</h3>
                </div>
                <div class=\"boxs\">
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/news.php\" class=\"box\">
                        <i class=\"far fa-newspaper icon\"></i><!-- fontawesome利用部分 -->
                        <p>記事管理</p>
                    </a>
                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/users.php\" class=\"box\"}
                    <i class=\"fas fa-users icon\"></i>
                    <p>会員管理</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class=\"container\">
            <p>Copyright @ 2021 EC_BOOK</p>
        </div>
    </footer>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  85 => 38,  71 => 27,  64 => 23,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.html.twig", "/var/www/html/EC_shop/templates/admin/dashboard.html.twig");
    }
}
