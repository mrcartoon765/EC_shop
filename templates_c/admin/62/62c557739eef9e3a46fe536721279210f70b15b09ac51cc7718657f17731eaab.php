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

/* index.html.twig */
class __TwigTemplate_63a5d708a9b80b4c7db761ed13f09406250317a2a9a9441e843bb53ca53944e6 extends \Twig\Template
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
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-13xxxxxxxxx\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-13xxxxxxxxx');
    </script>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>管理画面ログイン</title>

    <link rel=\"icon\" href=\"favicon.ico\">

<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/admin/styles.css?v=2\" rel=\"stylesheet\">
</head>

<body>
    <div class=\"login-wrapper\" id=\"login\">
        <div class=\"container\">
            <div class=\"login\">
                <div class=\"login-wrapper-title\">
                    <h3>ログイン</h3>
                </div>
                <form class=\"login-form\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/check.php\" method=\"POST\">
                    <div class=\"form-group\">
                        <p>メールアドレス</p>
                        <input type=\"email\" name=\"email\" required>
                    </div>
                    <div class=\"form-group\">
                        <p>パスワード</p>
                        <input type=\"password\" name=\"password\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-submit\">ログイン</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/Applications/MAMP/htdocs/EC_shop/templates/admin/index.html.twig");
    }
}
