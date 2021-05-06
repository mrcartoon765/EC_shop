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

/* /admin/sub/edit_sub.html.twig */
class __TwigTemplate_2a5828c9d15fed106a143670da4b1010e5ebb00e8bc8e866dbf9ab60a4360488 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/edit_sub.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>関連商品編集</h3>
                </div>
                <form class=\"edit-form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/update_sub.php\" method=\"POST\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name='id' value=";
        // line 9
        echo twig_escape_filter($this->env, ($context["sent_id"] ?? null), "html", null, true);
        echo ">
                    <div class=\"form-group\">
                        <p>商品名</p>
                        <input type='text' name='title' value=";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sub"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo " >
                    </div>
                    <div class=\"form-group\">
                        <p>説明文</p>
                        <textarea name='detail'>";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sub"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["detail"] ?? null) : null), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"form-group\">
                        <p>価格</p>
                        <input type='text' name='price' value=";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["sub"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["price"] ?? null) : null), "html", null, true);
        echo " required>
                    </div>
                    <div class=\"form-group\">
                        <p>画像</p>
                        <input type='file' name='image'  class=\"imgform\" value=";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["sub"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["image"] ?? null) : null), "html", null, true);
        echo " required>
                    </div>
                    <div class=\"form-group\">
                        <p>発売日</p>
                        <input type='text' name='date' value=";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["sub"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["date"] ?? null) : null), "html", null, true);
        echo " required>
                    </div>
                        <div class=\"form-group\"><p>関連商材名</p>
                <select name=\"ctg_id\">
                <option value=\"1\">";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["book_ctg"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"2\">";
        // line 33
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["book_ctg"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"3\">";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["book_ctg"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[2] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"4\">";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["book_ctg"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[3] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"5\">";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["book_ctg"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[4] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"6\">";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["book_ctg"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[5] ?? null) : null), "html", null, true);
        echo "</option>
                </select>
                    <div class=\"form-group\"><p>カテゴリ1</p>
                <select name=\"ctg1\">
                <option value=\"食品\">食品</option>
                <option value=\"サプリ\">サプリ</option>
                <option value=\"ガジェット\">ガジェット</option>
                <option value=\"家具・寝具\">家具・寝具</option>
                <option value=\"美容品\">美容品</option>
                </select></div>
                <div class=\"form-group\"><p>カテゴリ2</p>
                <select name=\"ctg2\">
                <option value=\"ストレス対策\">ストレス対策</option>
                <option value=\"アンチエイジング\">アンチエイジング</option>
                <option value=\"集中力改善\">集中力改善</option>
                <option value=\"睡眠改善\">睡眠改善</option>
                <option value=\"ダイエット\">ダイエット</option>
                </select></div>
                    <button type=\"submit\" class=\"btn btn-info\">更新する</button>
                </form>
            </div>
        </div>
    </main>
 ";
        // line 60
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/edit_sub.html.twig", 60)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/sub/edit_sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 60,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  86 => 28,  79 => 24,  72 => 20,  65 => 16,  58 => 12,  52 => 9,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/edit_sub.html.twig", "/var/www/html/EC_shop/templates/admin/sub/edit_sub.html.twig");
    }
}
