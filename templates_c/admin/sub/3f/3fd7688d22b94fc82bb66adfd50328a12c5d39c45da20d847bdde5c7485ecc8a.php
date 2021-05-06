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

/* /admin/sub/update_subcomplete.html.twig */
class __TwigTemplate_e16b93914701ffb140add12ebf82eb3f5cd63d29f12607ce44be30c72f2c230e extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/update_subcomplete.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"thanks\">
                    <h3>関連商品の更新登録が完了しました。</h3>
                    <p>3秒後に管理画面トップページへ戻ります</p>
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
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/update_subcomplete.html.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/sub/update_subcomplete.html.twig";
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
        return new Source("", "/admin/sub/update_subcomplete.html.twig", "/var/www/html/EC_shop/templates/admin/sub/update_subcomplete.html.twig");
    }
}
