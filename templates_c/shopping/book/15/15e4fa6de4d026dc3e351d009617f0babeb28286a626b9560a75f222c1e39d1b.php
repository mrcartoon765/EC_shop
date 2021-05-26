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

/* /shopping/book/detail.html.twig */
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("common/header.html.twig", "/shopping/book/detail.html.twig", 1)->display($context);
        // line 2
        echo "<br><br><br>
<main>
\t<div class=\"last-wrapper center-block\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"wrapper-title  center-block\">
\t\t\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["value"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t<div class=\"album py-5 bg-light\">
\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t\t\t<div class=\"col px-0\">
\t\t\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t\t\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["value"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["image"] ?? null) : null), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["value"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-text\" style=\"white-space: pre-wrap;\">";
        // line 21
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
        // line 31
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
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["value"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["price"] ?? null) : null)), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
        // line 45
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["value"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["price"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ctg_id\" value=";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["value"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["ctg_id"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_status\" value=\"1\">
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t";
        // line 51
        if ((($context["login"] ?? null) == true)) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t<section class=\"post\" data-wantname=\"";
            echo twig_escape_filter($this->env, ($context["want_name"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-want";
            // line 54
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-heart fa-2x px-16 ";
            // line 56
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" type='center'>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-success\" data-cal=\"1\" data-target=\".counter\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"count\" data-max=\"100\" data-min=\"0\" step=\"1\" placeholder=\"数値を入力\" class=\"counter text-center\" style=\"width:30%\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-success\" data-cal=\"-1\" data-target=\".counter\">
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-success\">カートに入れる</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-block d-sm-none\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i type=\"submit\" class=\"fas fa-shopping-cart fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_status\" value=\"1\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\"> <h3 class=\"text-center\">関連オススメ商品</h3>
\t\t\t\t\t\t\t<ul class=\"slider\">
\t\t\t\t\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sub_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["sub_detail"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["sub"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["id"] ?? null) : null), "html", null, true);
            echo "\"><img class=\"img-thumbnail\" alt=\"\" src=\"";
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/image/sub/";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["sub"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["image"] ?? null) : null), "html", null, true);
            echo "\"/></a>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center h4\">";
            // line 96
            echo twig_escape_filter($this->env, twig_slice($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["sub"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["title"] ?? null) : null), 0, 20), "html");
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center h5\">￥";
            // line 97
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["sub"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["price"] ?? null) : null)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
\t<div class=\"text-center\">
\t<a href=\"../../../shopping/book/Booklist.php\">
\t<button class=\"btn btn-gray\">書籍一覧へ</button>
\t</a>
\t</div>


</div>
</div>

</div>
</div>
</main>

";
        // line 120
        $this->loadTemplate("common/footer.html.twig", "/shopping/book/detail.html.twig", 120)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/book/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 120,  204 => 100,  195 => 97,  191 => 96,  182 => 95,  179 => 94,  175 => 93,  142 => 62,  139 => 61,  131 => 56,  126 => 54,  120 => 52,  118 => 51,  110 => 46,  106 => 45,  102 => 44,  86 => 31,  73 => 21,  69 => 20,  62 => 17,  57 => 15,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/book/detail.html.twig", "/var/www/html/EC_shop/templates/shopping/book/detail.html.twig");
    }
}
