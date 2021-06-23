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

/* /admin/book/edit_book.html.twig */
class __TwigTemplate_5b6f67da5083e6b18858d1f7dcbe7afdea2b90ad29b3fdbe2e61e0d255ab01c5 extends \Twig\Template
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
        echo "    ";
        $this->loadTemplate("common/header_admin.html.twig", "/admin/book/edit_book.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3 class=\"text-center\">書籍編集</h3>
                </div>
                <form class=\"edit-form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/update_book.php\" method=\"POST\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name='id' value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["sent_id"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <h3 class=\"text-center\">タイトル</p>
                        <input class=\"border border-3 border-info\" type='text' name='title' value=\"";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <h3 class=\"text-center\">説明文</p>
                        <textarea class=\"border border-3 border-info\" name='detail'>";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["book"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["detail"] ?? null) : null), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"form-group\">
                        <h3 class=\"text-center\">価格</p>
                        <input class=\"border border-3 border-info\" type='text' name='price' value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["book"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["price"] ?? null) : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <h3 class=\"text-center\">画像</p>
                        <input class=\"border border-3 border-info\" type='file' name='image'  class=\"imgform\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["book"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["image"] ?? null) : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <h3 class=\"text-center\">発売日</p>
                        <input class=\"border border-3 border-info\" type='text' name='date' value=\"";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["book"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["date"] ?? null) : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <h3 class=\"text-center\">関連商材ID</p>
                        <input class=\"border border-3 border-info\" type='text' name='ctg_id' value=\"";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["book"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["ctg_id"] ?? null) : null), "html", null, true);
        echo "\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">更新する</button>
                </form>
            </div>
        </div>
    </main>
 ";
        // line 39
        $this->loadTemplate("common/footer.html.twig", "/admin/book/edit_book.html.twig", 39)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/book/edit_book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  93 => 32,  86 => 28,  79 => 24,  72 => 20,  65 => 16,  58 => 12,  52 => 9,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/book/edit_book.html.twig", "/var/www/html/EC_shop/templates/admin/book/edit_book.html.twig");
    }
}
