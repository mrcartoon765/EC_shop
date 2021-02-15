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

/* Login.html.twig */
class __TwigTemplate_b9a6e9da6890db4a8f5449eb14d395a4c4b4a215dfd009310650d7025989bdad extends \Twig\Template
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
<html lang=\"jp\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>ログイン</title>
</head>
<body>
<body>
  <h1>ようこそ、ログインしてください</h1>
  <form action=\"login.php\" method=\"post\">
  <label for=\"email\">email</label>
  <input type=\"email\" name=\"email\">
  <label for=\"password\">password</label>
  <input type=\"password\" name=\"password\">
  <button type=\"submit\">Sign In!</button>
  <h1>初めての方はこちら</h1>
  <form action=\"signUp.php\" method=\"post\">
    <label for=\"email\">email</label>
    <input type=\"email\" name=\"email\">email
    <label for=\"password\">password</label>
    <input type=\"password\" name=\"password\">
    <button type=\"submit\">Sign Up!</button>
    <p>パスワードは半角英数字をそれぞれ1文字以上含んだ、8文字以上で設定してください。</p>
  </form>
 </body>
</body>
</html>

<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\" >トップへ</a></li>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 30,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "Login.html.twig", "/Applications/MAMP/htdocs/portforio/templates/create_account/Login.html.twig");
    }
}
