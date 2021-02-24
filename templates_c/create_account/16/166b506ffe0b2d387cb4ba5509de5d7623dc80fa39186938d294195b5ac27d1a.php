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
        return array (  53 => 19,  41 => 10,  30 => 1,);
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
