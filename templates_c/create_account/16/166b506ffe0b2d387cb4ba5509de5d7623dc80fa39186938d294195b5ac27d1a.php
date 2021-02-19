<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_1efc14eb7a34c1b370edbaf1fda0f23978b444b25c655da4f467277dc4c45b9a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ja\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>ログイン</title>
</head>
<body>
  <h1>ようこそ、ログインしてください</h1>
  <form action=\"login.php\" method=\"post\">
  <label for=\"mail\">mail</label>
  <input type=\"mail\" name=\"mail\">
  <label for=\"password\">password</label>
  <input type=\"password\" name=\"password\">
  <button type=\"submit\">Sign In!</button>
  </form>
  <h1>初めての方はこちら</h1>
  <form action=\"signUp.php\" method=\"post\">
    <label for=\"mail\">mail</label>
    <input type=\"mail\" name=\"mail\">mail
    <label for=\"password\">password</label>
    <input type=\"password\" name=\"password\">
    <button type=\"submit\">Sign Up!</button>
    <p>パスワードは半角英数字をそれぞれ1文字以上含んだ、8文字以上で設定してください。</p>
  </form>
 </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/Applications/MAMP/htdocs/portforio/templates/create_account/index.html.twig");
    }
}
