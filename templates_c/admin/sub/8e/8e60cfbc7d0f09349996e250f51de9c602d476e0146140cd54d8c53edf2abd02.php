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
class __TwigTemplate_1c6e728c5676de4099db65adccbf87b122a538abecf8ff220d3fba41e6ed7777 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/create_sub.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3 class=\"text-center\">関連商材データ新規作成</h3>
\t\t\t</div>
\t\t\t<form class=\"edit-form\" method=\"POST\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/sub_product.php\" enctype=\"multipart/form-data\">
\t\t\t\t<h3 class=\"text-center\">商品名</h3><input class=\"border-4 border-info\" type=\"text\" name=\"title\">
\t\t\t\t<h3 class=\"text-center\">商品説明文</h3>
\t\t\t\t<textarea class=\"border-4 border-info\" name=\"detail\"></textarea>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<h3 class=\"text-center\">価格</h3><input class=\"border-4 border-info\" type=\"text\" name=\"price\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h3 class=\"text-center\">画像</h3><input type=\"file\" name=\"image\" class=\"imgform border-4 border-info\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"text-center\">発売日</h3><input class=\"border-4 border-info\" type=\"text\" name=\"date\">
\t\t\t\t\t<h3 class=\"text-center\">関連商材名</h3>
\t\t\t\t\t<select class=\"border-4 border-info text-center\" name=\"ctg_id\">
\t\t\t\t\t\t<option value=\"1\">";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book_ctg"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"2\">";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["book_ctg"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"3\">";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["book_ctg"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"4\">";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["book_ctg"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[3] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"5\">";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["book_ctg"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[4] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"6\">";
        // line 27
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["book_ctg"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[5] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h3 class=\"text-center\">カテゴリ1</h3>
\t\t\t\t\t\t\t<select class=\"border-4 border-info\" name=\"ctg1\">
\t\t\t\t\t\t\t\t<option value=\"1\">食品</option>
\t\t\t\t\t\t\t\t<option value=\"2\">サプリ</option>
\t\t\t\t\t\t\t\t<option value=\"3\">ガジェット</option>
\t\t\t\t\t\t\t\t<option value=\"4\">家具・寝具</option>
\t\t\t\t\t\t\t\t<option value=\"5\">美容品</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h3 class=\"text-center\">カテゴリ2</h3>
\t\t\t\t\t\t\t<select class=\"border-4 border-info\" name=\"ctg2\">
\t\t\t\t\t\t\t\t<option value=\"1\">ストレス対策</option>
\t\t\t\t\t\t\t\t<option value=\"2\">アンチエイジング</option>
\t\t\t\t\t\t\t\t<option value=\"3\">集中力改善</option>
\t\t\t\t\t\t\t\t<option value=\"4\">睡眠改善</option>
\t\t\t\t\t\t\t\t<option value=\"5\">ダイエット</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p><br></p>
\t\t\t\t\t<input type=\"hidden\" name=\"last_update\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">登録</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</main>
";
        // line 59
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/create_sub.html.twig", 59)->display($context);
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
        return array (  119 => 59,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/create_sub.html.twig", "/var/www/html/EC_shop/templates/admin/sub/create_sub.html.twig");
    }
}
