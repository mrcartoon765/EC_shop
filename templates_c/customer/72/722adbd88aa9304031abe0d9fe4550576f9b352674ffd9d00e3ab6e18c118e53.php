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

/* /customer/shopping_history.html.twig */
class __TwigTemplate_11c4fa3ff87f900c362a86269e72f1061b9f93ff18279683dec696bf1f91b1c9 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/customer/shopping_history.html.twig", 1)->display($context);
        // line 2
        echo "<body>

\t<main>
\t\t<div class=\"container-flluid\">
\t\t\t<br><br><br>
\t\t\t<div class=\"wrapper-title\">

\t\t\t\t<h2>購入履歴</h2>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t<h4 class=\"text-center\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["no_history"] ?? null), "html", null, true);
        echo "</h4>
\t\t\t\t";
        // line 13
        $context["a"] = 0;
        // line 14
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["history"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 15
            echo "\t\t\t\t\t";
            $context["id"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["history"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["a"] ?? null)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null);
            // line 16
            echo "\t\t\t\t\t<div class=\"title\"><h3>
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_slice($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["history"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["a"] ?? null)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["created_at"] ?? null) : null), 0, 10), "html", null, true);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
            echo "shopping_history_detail.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\" value=";
            // line 27
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " name=\"order_id\">購入詳細</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\"><br><h4>
\t\t\t\t\t\t\t\t\t\t合計金額:￥";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["history"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["a"] ?? null)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["total"] ?? null) : null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</h4><br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\"><h4>
\t\t\t\t\t\t\t\t\t\t配送状況
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 38
            if ((0 == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["value"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["order_status"] ?? null) : null))) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary disabled btn-lg\">発送準備中</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger disabled btn-lg\">発送済み</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 47
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br><br></body>
</body></div></main>";
        // line 53
        $this->loadTemplate("common/shopping/hidden_input_end.html.twig", "/customer/shopping_history.html.twig", 53)->display($context);
        $this->loadTemplate("common/footer.html.twig", "/customer/shopping_history.html.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "/customer/shopping_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  125 => 49,  119 => 48,  117 => 47,  111 => 43,  107 => 41,  103 => 39,  101 => 38,  91 => 31,  84 => 27,  80 => 26,  68 => 17,  65 => 16,  62 => 15,  57 => 14,  55 => 13,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/customer/shopping_history.html.twig", "/var/www/html/EC_shop/templates/customer/shopping_history.html.twig");
    }
}
