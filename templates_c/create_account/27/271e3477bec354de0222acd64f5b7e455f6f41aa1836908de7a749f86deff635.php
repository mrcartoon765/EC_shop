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

/* login.html.twig */
class __TwigTemplate_e20cda4d458f1db6711eb35220cb225e922bc9e44f4b411400216a4c160cee5e extends \Twig\Template
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
<html lang=\"jp\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>ログイン</title>
</head>
<body>

<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\" >トップページへ</a></li>
<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "create_account/logout.php\" >ログアウト</a></li>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/var/www/html/EC_shop/templates/create_account/login.html.twig");
    }
}
