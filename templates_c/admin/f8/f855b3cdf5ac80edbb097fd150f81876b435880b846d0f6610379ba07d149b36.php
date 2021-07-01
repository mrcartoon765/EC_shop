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

/* /admin/index.html.twig */
class __TwigTemplate_be7ad32437125bc34e00f16e44d5ea6a042cbe34afbbf2e5a2f79d3bc02df172 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/index.html.twig", 1)->display($context);
        // line 2
        echo "<body>
    <div class=\"login-wrapper\" id=\"login\">
        <div class=\"container\">
            <div class=\"login border border-4 border-info\">
                <div class=\"login-wrapper-title\">
                    <h3>ログイン</h3>
                </div>
                <form class=\"login-form\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/check.php\" method=\"POST\">
                    <div class=\"form-group\">
                        <p>メールアドレス</p>
                        <input class=\"border border-4 border-info\" type=\"email\" name=\"email\" required>
                    </div>
                    <div class=\"form-group\">
                        <p>パスワード</p>
                        <input class=\"border border-4 border-info\" type=\"password\" name=\"password\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-submit btn-success\">ログイン</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/index.html.twig", "/var/www/html/EC_shop/templates/admin/index.html.twig");
    }
}