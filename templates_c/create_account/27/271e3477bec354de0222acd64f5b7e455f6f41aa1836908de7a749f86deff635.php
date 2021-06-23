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

/* /create_account/login.html.twig */
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
        echo " ";
        $this->loadTemplate("common/header.html.twig", "/create_account/login.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
    <br><br><br>

    <div class=\"container\">
  <body class=\"text-center\">
<main class=\"form-signin\">
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/user_check.php\" method=\"POST\">
    <img class=\"mb-4 rounded-circle\" src=\"../../image/logo.png\" alt=\"\" width=\"72\" height=\"70\">
    <h1 class=\"h3 mb-3 fw-normal\">Sing in</h1>
    <input type=\"mail\"  name=\"mail\" class=\"form-control border-4 border-info\" placeholder=\"メールアドレス\">
    <br>
    <input type=\"password\" name=\"password\" class=\"form-control border-4 border-info\" placeholder=\"パスワード\">
    <br>
    <br>
            ";
        // line 16
        if ((($context["login_pay"] ?? null) == 1)) {
            // line 17
            echo "    <button class=\"w-100 btn btn-lg btn-primary\" name=\"login_pay\" type=\"submit\" method=\"POST\" value=1>サインイン</button>
            ";
        } else {
            // line 19
            echo "    <button class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">サインイン</button>
            ";
        }
        // line 21
        echo "  </form>

 <br><br>
            <div class=\"wrapper-title\">
            <div class=\"container\">
            <h4>新規会員登録</h4>
            <h7>登録がお済みでない方はこちらから新規登録してください。</h7>
            </div>
            <button type=\"button\" class=\"btn btn-submit\" onclick=\"location.href='";
        // line 29
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/regist.php'\">新規登録</button>
            </div>
            </div>
    </main>
 ";
        // line 33
        $this->loadTemplate("common/footer.html.twig", "/create_account/login.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "/create_account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  79 => 29,  69 => 21,  65 => 19,  61 => 17,  59 => 16,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/create_account/login.html.twig", "/var/www/html/EC_shop/templates/create_account/login.html.twig");
    }
}
