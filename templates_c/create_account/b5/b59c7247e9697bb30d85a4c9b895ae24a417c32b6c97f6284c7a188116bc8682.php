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

/* Login.html.twig */
class __TwigTemplate_579569e3d09d076a034b806fff5d97fc050574a67fe452ac440429d759c33aa4 extends \Twig\Template
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
        echo " <main>
        <div class=\"wrapper last-wrapper register-wrapper\">
            <div class=\"container\">
            <div class=\"login\">
            <div class=\"wrapper-title\">
            <h4>ログイン</h4>
            </div>
            <form class=\"login-form\" action=\"./../../create_account/user_check.php\" method=\"POST\">
            <div class=\"form-group\">
            <p>メールアドレス</p>
            <input type=\"email\" name=\"mail\" required>
            </div>
            <div class=\"form-group\">
            <p>パスワード</p>
            <input type=\"password\" name=\"password\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-gray\">ログイン</button>
            </form>
            </div>
            <div class=\"register\">
            <div class=\"wrapper-title\">
            <h4>新規登録</h4>
            <p>登録がお済みでない方はこちらから新規登録してください。</p>
            </div>
            <button type=\"button\" class=\"btn btn-submit\" onclick=\"location.href='./../../create_account/regist.php'\">新規登録</button>
            </div>
        </div>
        </div>
    </main>";
    }

    public function getTemplateName()
    {
        return "Login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login.html.twig", "/var/www/html/EC_shop/templates/create_account/Login.html.twig");
    }
}
