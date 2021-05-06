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

/* /admin/logout.html.twig */
class __TwigTemplate_9d0aa581baca1f0417afdcf93202a9071695d73a7d8ae2f8656b7c1fb31be9ed extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/admin/logout.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"thanks\">
                    <h3>ログアウトしました</h3>
                    <p>管理者画面からログアウトしました</p>
                    <p>10秒後トップ画面へ戻ります</p>
                    <p>お疲れ様でした</p>
                    <button type=\"button\" class=\"btn btn-success\" onclick=\"location.href='";
        // line 10
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php'\">トップページに戻る</button>
                    <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
        // line 11
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/index.php'\">管理者ログインページに戻る</button>
                </div>
            </div>
        </div>
    </main>
 ";
        // line 16
        $this->loadTemplate("common/footer.html.twig", "/admin/logout.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  54 => 11,  50 => 10,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/logout.html.twig", "/var/www/html/EC_shop/templates/admin/logout.html.twig");
    }
}
