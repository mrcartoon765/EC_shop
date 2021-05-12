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

/* /shopping/sub/detail.html.twig */
class __TwigTemplate_ed287b32ea3872292b25dc4b7f81101e89f00687c79bdeaab0f8a1c09ebb4e11 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/sub/detail.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper last-wrapper center-block\">
\t\t<div class=\"container  center-block\">
\t\t\t<div class=\"wrapper-title  center-block\">
\t\t\t\t<h3>商品詳細</h3>
\t\t\t\t<p>";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["value"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"album py-5 bg-light\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t\t<form action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">
                  <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["value"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["image"] ?? null) : null), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"\">
                  </div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["value"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t<p class=\"text-center\" style=\"100%\">価格 ￥";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["value"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["price"] ?? null) : null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["value"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["price"] ?? null) : null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\" style=\"white-space: pre-wrap;\">";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["value"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["detail"] ?? null) : null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" type='center'>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"count\" maxlength=\"1\" step=\"1\" placeholder=\"数量を入力\" style=\"width:50%;\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" style=\"width:50%;\">カートに入れる</button>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 30
        if ((($context["login"] ?? null) == true)) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"post\" data-wantname=\"";
            echo twig_escape_filter($this->env, ($context["want_name"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-want ";
            // line 33
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-heart fa-lg px-16 ";
            // line 34
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
       <ul id=\"slider\">
         <li><img alt=\"画像1\" src=\"../../../shopping/image/chou.jpg\" /></li>
         <li><img alt=\"画像1\" src=\"../../../shopping/image/chou.jpg\" /></li>
         <li><img alt=\"画像1\" src=\"../../../shopping/image/chou.jpg\" /></li>
         <li><img alt=\"画像1\" src=\"../../../shopping/image/chou.jpg\" /></li>
         <li><img alt=\"画像1\" src=\"../../../shopping/image/chou.jpg\" /></li>
         <li><img alt=\"画像1\" src=\"../../../shopping/image/chou.jpg\" /></li>
       </ul>
</div>

\t\t\t</div>
      </div>
\t\t</main>
\t\t";
        // line 60
        $this->loadTemplate("common/footer.html.twig", "/shopping/sub/detail.html.twig", 60)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/sub/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 60,  114 => 40,  111 => 39,  103 => 34,  99 => 33,  93 => 31,  91 => 30,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  64 => 19,  59 => 17,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/detail.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/detail.html.twig");
    }
}
