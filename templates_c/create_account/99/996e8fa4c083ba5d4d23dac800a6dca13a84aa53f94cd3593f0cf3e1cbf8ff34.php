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

/* /create_account/login_false.html.twig */
class __TwigTemplate_f8e0d24ecaeecff2f3eb8a4a89146a6711fcfe4d2bc0c23d4b49de7f2740d665 extends \Twig\Template
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
        echo "  ";
        $this->loadTemplate("common/header.html.twig", "/create_account/login_false.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"thanks\">
                    <h3>ログインに失敗しました</h3>
                    <p>メールアドレスあるいはパスワードが違います</p>
                    <p>3秒後ログイン画面へ戻ります</p>
                    <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        // line 9
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/index.php'\">トップページに戻る</button>
                </div>
            </div>
        </div>
    </main>
 ";
        // line 14
        $this->loadTemplate("common/footer.html.twig", "/create_account/login_false.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "/create_account/login_false.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  49 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/create_account/login_false.html.twig", "/var/www/html/EC_shop/templates/create_account/login_false.html.twig");
    }
}
