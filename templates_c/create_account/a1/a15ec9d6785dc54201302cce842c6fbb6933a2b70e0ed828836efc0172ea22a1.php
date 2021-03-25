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
class __TwigTemplate_ad518ec06dc27cc7de7e793067ea20ba16e78b4aaf4edd70e1ef54f5ef81e090 extends \Twig\Template
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
<html lang=\"ja\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>ログイン</title>
</head>
<body>
  <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\">トップページへ</a>
  <h1>ショッピングの利用をされる方はログインしてください</h1>
  <form action=\"login.php\" method=\"post\">
  <label for=\"mail\">メールアドレス：</label>
  <input type=\"mail\" name=\"mail\"><br><br>
  <label for=\"password\">パスワード：</label>
  <input type=\"password\" name=\"password\"><br><br>
  <button type=\"submit\">サインイン</button>
  </form>
  <h1>初めての方は<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::CREATE_ACCOUNT"), "html", null, true);
        echo "\" >こちら</a></h1>


  </form>
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
        return array (  60 => 19,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/EC_shop/templates/create_account/index.html.twig");
    }
}
