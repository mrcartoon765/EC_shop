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

/* /customer/delete_customer.html.twig */
class __TwigTemplate_b27ddf4b6b78b19fd4420dba24c05fc91d9db9da28a0473f53aee26ec3d97091 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/customer/delete_customer.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"thanks\">
                    <h1>退会画面</h1>
                    <h4 class=\"red\">会員の退会をされるとそのアカウントにログイン不可能になり</h4>
                    <h4 class=\"red\">注文履歴へのアクセスが不可能になり、カートに入っている商品は消滅します</h4>
                    <br>
                    <p>HEALTH KNOWLEGEの会員を退会を進められる方は</p>
                    <p>退会をご希望される方は、アカウントでご使用中のメールアドレスとパスワードの入力をお願いいたします</p>
                    </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
            <div class=\"login\">
            <div class=\"wrapper-title\">
            <h4>退会手続き</h4>
            <span class=\"red\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["miss"] ?? null), "html", null, true);
        echo "</span>
            </div>
            <form class=\"login-form\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/customer/delete_customer_check.php\" method=\"POST\">
            <div class=\"form-group\">
            <p>メールアドレス</p>
            <input type=\"email\" name=\"mail\" required>
            </div>
            <div class=\"form-group\">
            <p>パスワード</p>
            <input type=\"password\" name=\"password\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-danger\">退会する</button>
            </form>
            </div>
            <div class=\"wrapper-title\">
            </div>
        </div>
        </div>
                    <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
        // line 36
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/index.php'\">トップページに戻る</button>
                </div>
            </div>
        </div>
    </main>
 ";
        // line 41
        $this->loadTemplate("common/footer.html.twig", "/customer/delete_customer.html.twig", 41)->display($context);
    }

    public function getTemplateName()
    {
        return "/customer/delete_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 41,  82 => 36,  63 => 20,  58 => 18,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/customer/delete_customer.html.twig", "/var/www/html/EC_shop/templates/customer/delete_customer.html.twig");
    }
}
