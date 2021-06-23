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

/* /customer/shopping_history_detail.html.twig */
class __TwigTemplate_d9021530d081a02eac1d845bc26834751afb30ef2a1bbc497662c520e57dc6ed extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/customer/shopping_history_detail.html.twig", 1)->display($context);
        // line 2
        echo "<br><br><br>
<br><br><br>
<body>

\t<main>
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\"><h3>
\t\t\t購入日時：";
        // line 9
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</h3></div>
\t\t\t<br>
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_detail"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 12
            echo "\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<img class=\"card-img\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "image/";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["order"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["table_name"] ?? null) : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["order"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["product_image"] ?? null) : null), "html", null, true);
            echo "\" alt=\"img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">商品名：";
            // line 19
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["order"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_title"] ?? null) : null), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<h6 class=\"card-text\">
\t\t\t\t\t\t\t\t商品単価：￥";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["order"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["price"] ?? null) : null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t購入個数：";
            // line 23
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["order"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["num"] ?? null) : null), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["order"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["table_name"] ?? null) : null), "html", null, true);
            echo "/detail.php?id=";
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["order"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["product_id"] ?? null) : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-dark\">商品詳細画面へ</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, ($context["customer"] ?? null), "html", null, true);
        echo "shopping_history.php\">
\t\t\t\t<button class=\"btn btn-info\">購入履歴ページへ戻る</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t<br><br></div>
</body></main>";
        // line 39
        $this->loadTemplate("common/shopping/hidden_input_end.html.twig", "/customer/shopping_history_detail.html.twig", 39)->display($context);
        $this->loadTemplate("common/footer.html.twig", "/customer/shopping_history_detail.html.twig", 39)->display($context);
    }

    public function getTemplateName()
    {
        return "/customer/shopping_history_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  106 => 34,  87 => 24,  83 => 23,  78 => 21,  73 => 19,  62 => 15,  57 => 12,  53 => 11,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/customer/shopping_history_detail.html.twig", "/var/www/html/EC_shop/templates/customer/shopping_history_detail.html.twig");
    }
}
