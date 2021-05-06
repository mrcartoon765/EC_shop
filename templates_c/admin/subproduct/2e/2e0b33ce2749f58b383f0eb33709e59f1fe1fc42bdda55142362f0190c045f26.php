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

/* /admin/sub/create_sub.html.twig */
class __TwigTemplate_929c1b1c293d96417c134641a8e6f4128ce9117e0af27fe5fa6a6288d49225a5 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/create_sub.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>関連商材データ新規作成</h3>
                </div>
                <form class=\"edit-form\" method=\"POST\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/sub_product.php\" enctype=\"multipart/form-data\">
                <div class=\"form-group\"><p>商品名</p><input type=\"text\" name=\"title\" required></div>
                <div class=\"form-group\"><p>説明文</p><input type=\"text\" name=\"detail\" ></div>
                <div class=\"form-group\"><p>価格</p><input type=\"text\" name=\"price\" required></div>
                <div class=\"form-group\"><p>画像</p><input type=\"file\" name=\"image\" class=\"imgform\"><input type=\"hidden\" name=\"image\"></div>
                <div class=\"form-group\"><p>発売日</p><input type=\"text\" name=\"date\" required></div>

                <div class=\"form-group\"><p>関連商材名</p>
                <select name=\"ctg_id\">
                <option value=\"1\">";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book_ctg"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"2\">";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["book_ctg"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"3\">";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["book_ctg"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"4\">";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["book_ctg"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[3] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"5\">";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["book_ctg"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[4] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"6\">";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["book_ctg"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[5] ?? null) : null), "html", null, true);
        echo "</option>
                </select></div>
                <div class=\"form-group\"><p>カテゴリ１</p>
                <select name=\"ctg1\">
                <option value=\"1\">食品</option>
                <option value=\"2\">サプリ</option>
                <option value=\"3\">ガジェット</option>
                <option value=\"4\">家具・寝具</option>
                <option value=\"5\">美容品</option>
                </select></div>
                <div class=\"form-group\"><p>カテゴリ２</p>
                <select name=\"ctg2\">
                <option value=\"1\">ストレス対策</option>
                <option value=\"2\">集中力強化</option>
                <option value=\"3\">アンチエイジング</option>
                <option value=\"4\">睡眠改善</option>
                <option value=\"5\">ダイエット</option>
                </select></div>
                <button type=\"submit\" class=\"btn btn-info\">登録</button>
                </form>
            </div>
        </div>
    </main>
 ";
        // line 45
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/create_sub.html.twig", 45)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/sub/create_sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 45,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/create_sub.html.twig", "/var/www/html/EC_shop/templates/admin/sub/create_sub.html.twig");
    }
}
