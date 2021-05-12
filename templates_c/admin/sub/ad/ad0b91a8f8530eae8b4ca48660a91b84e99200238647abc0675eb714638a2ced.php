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

/* /admin/sub/sub_productcomplete.html.twig */
class __TwigTemplate_585f6506cf9396fc476303d1052532c3c437767fc11ab0b660914a4f832b5ba0 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/sub_productcomplete.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"thanks\">
                    <h3>関連商品のデータ登録が完了しました。</h3>
                    <p>3秒後に管理画面トップへ戻ります</p>
                    <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        // line 8
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/index.php'\">トップページに戻る</button>
                </div>
            </div>
        </div>
    </main>
 ";
        // line 13
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/sub_productcomplete.html.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/sub/sub_productcomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/sub_productcomplete.html.twig", "/var/www/html/EC_shop/templates/admin/sub/sub_productcomplete.html.twig");
    }
}
