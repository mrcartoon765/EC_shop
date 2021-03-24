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

/* complete.html.twig */
class __TwigTemplate_9ab7c77fa6d41736876a1bfc1fbd2aaa874254054279e1a0497ea72ebd2a9725 extends \Twig\Template
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

  <title>会員登録完了</title>

</head>
<body>
  <div>会員登録が完了しました</div>
  <br><br><br><br><br><br>
<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\" >トップページへ</a>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "complete.html.twig", "/var/www/html/EC_shop/templates/create_account/complete.html.twig");
    }
}
