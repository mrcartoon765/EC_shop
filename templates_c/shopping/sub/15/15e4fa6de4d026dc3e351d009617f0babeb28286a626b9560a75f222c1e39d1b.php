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

/* shopping/book/detail.html.twig */
class __TwigTemplate_7502df95b728ff33c7ef860352daf52aa0bd95fa114c9ffd96c81843469c35e9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pickup' => [$this, 'block_pickup'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("common/header.html.twig", "shopping/book/detail.html.twig", 1)->display($context);
        // line 2
        echo "<br><br><br>
<main>
\t";
        // line 4
        $context["a"] = 0;
        // line 5
        echo "\t";
        $this->loadTemplate("common/shopping/hidden_input.html.twig", "shopping/book/detail.html.twig", 5)->display($context);
        // line 6
        echo "\t<div class=\"last-wrapper center-block\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"wrapper-title  center-block\">
\t\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["value"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t<div class=\"album py-5 bg-light\">
\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t\t\t<div class=\"col px-0\">
\t\t\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t\t\t<form action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_image\" value=";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["value"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["image"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["value"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["image"] ?? null) : null), "html", null, true);
        echo "\" class=\"text-center\" style=\"width: 40%;\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-text\">";
        // line 23
        echo twig_slice($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["value"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["detail"] ?? null) : null), 0, 50);
        echo "..</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-gray\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">商品詳細の表示</button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body h5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo nl2br((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["value"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["detail"] ?? null) : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">閉じる</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<h3 class=\"text-center red\" style=\"100%\">価格 ￥";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["value"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["price"] ?? null) : null)), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["value"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
        // line 48
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["value"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["price"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_status\" value=\"1\">
\t\t\t\t\t\t\t\t\t";
        // line 50
        $this->loadTemplate("common/shopping/hidden_input_cart_in.html.twig", "shopping/book/detail.html.twig", 50)->display($context);
        // line 51
        echo "\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t";
        // line 54
        $this->loadTemplate("common/shopping/want_button.html.twig", "shopping/book/detail.html.twig", 54)->display($context);
        // line 55
        echo "

\t\t\t\t\t\t\t\t";
        // line 57
        $this->loadTemplate("common/cart_btn.html.twig", "shopping/book/detail.html.twig", 57)->display($context);
        // line 58
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<br>
\t\t";
        // line 67
        $this->displayBlock('pickup', $context, $blocks);
        // line 94
        echo "

</div></main><input type=\"hidden\" id=\"for_count_end\" value=\"1\">";
        // line 96
        $this->loadTemplate("common/footer.html.twig", "shopping/book/detail.html.twig", 96)->display($context);
    }

    // line 67
    public function block_pickup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h3 class=\"text-center\">関連オススメ商品</h3>
\t\t\t\t\t<br>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<ul class=\"slider\">
\t\t\t\t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sub_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 76
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["sub_detail"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["sub"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["id"] ?? null) : null), "html", null, true);
            echo "\"><img class=\"img-thumbnail\" alt=\"\" src=\"";
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "/image/sub/";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["sub"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["image"] ?? null) : null), "html", null, true);
            echo "\"/></a>
\t\t\t\t\t\t\t\t\t<p class=\"text-center h4\">";
            // line 78
            echo twig_escape_filter($this->env, twig_slice($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["sub"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["title"] ?? null) : null), 0, 20), "html");
            echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-center h5\">￥";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["sub"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["price"] ?? null) : null)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"text-center\">
\t\t\t<a href=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "book/booklist.php\">
\t\t\t\t<button class=\"btn btn-gray\">書籍一覧へ</button>
\t\t\t</a>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "shopping/book/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 89,  201 => 82,  192 => 79,  188 => 78,  179 => 77,  176 => 76,  172 => 75,  163 => 68,  159 => 67,  155 => 96,  151 => 94,  149 => 67,  138 => 58,  136 => 57,  132 => 55,  130 => 54,  125 => 51,  123 => 50,  118 => 48,  114 => 47,  110 => 46,  94 => 33,  81 => 23,  74 => 20,  69 => 18,  65 => 17,  54 => 9,  49 => 6,  46 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shopping/book/detail.html.twig", "/var/www/html/EC_shop/templates/shopping/book/detail.html.twig");
    }
}
