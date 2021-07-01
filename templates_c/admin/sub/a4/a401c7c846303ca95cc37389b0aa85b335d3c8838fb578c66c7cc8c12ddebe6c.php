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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/edit_sub.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container-flluid\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h3>関連商品編集</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/update_sub.php\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name='id' value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["sent_id"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<h3 class=\"text-center\">商品名</h3>
\t\t\t\t<input class=\"text-center border border-3 border-info\" type='text' name='title' value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sub"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t<p></p><br>
\t\t\t\t<h3 class=\"text-center\">説明文</h3>
\t\t\t\t<textarea class=\"border border-3 border-info\" name='detail'>";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sub"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["detail"] ?? null) : null), "html", null, true);
        echo "</textarea>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h3 class=\"text-center\">価格</h3>
\t\t\t\t\t<input class=\"text-center border border-3 border-info\" type='text' name='price' value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["sub"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["price"] ?? null) : null), "html", null, true);
        echo "\" required>
\t\t\t\t\t<h3 class=\"text-center\">
\t\t\t\t\t\t画像</h3>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/image/sub/";
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["sub"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["image"] ?? null) : null), "html", null, true);
        echo "\" style=\"height:130px\" alt=\"\">
\t\t\t\t\t\t<input class=\"border border-3 border-info\" type='file' name='image' class=\"imgform\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["sub"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["image"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"text-center\">発売日</h3>
\t\t\t\t\t<input class=\"text-center border border-3 border-info\" type='text' name='date' value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["sub"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["date"] ?? null) : null), "html", null, true);
        echo "\" required>
\t\t\t\t\t<h3 class=\"text-center\">関連商材名</h3>
\t\t\t\t\t<select class=\"text-center\" name=\"ctg_id\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["sub"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["ctg_id"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t<option hidden value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["sub"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["ctg_id"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["ctg_id"] ?? null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"1\">";
        // line 31
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["book_ctg"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"2\">";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["book_ctg"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[1] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"3\">";
        // line 33
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["book_ctg"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[2] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"4\">";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["book_ctg"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[3] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"5\">";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["book_ctg"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[4] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"6\">";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["book_ctg"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[5] ?? null) : null), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<p>カテゴリ1</p>
\t\t\t\t\t\t\t<select name=\"ctg1\">
\t\t\t\t\t\t\t\t<option hidden value=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["sub"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["ctg1"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["ctg1_id"] ?? null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"1\">食品</option>
\t\t\t\t\t\t\t\t<option value=\"2\">サプリ</option>
\t\t\t\t\t\t\t\t<option value=\"3\">ガジェット</option>
\t\t\t\t\t\t\t\t<option value=\"4\">家具・寝具</option>
\t\t\t\t\t\t\t\t<option value=\"5\">美容品</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<p>カテゴリ2</p>
\t\t\t\t\t\t\t<select name=\"ctg2\">
\t\t\t\t\t\t\t\t<option hidden value=\"";
        // line 53
        echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["sub"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["ctg2"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["ctg2_id"] ?? null), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"1\">ストレス対策</option>
\t\t\t\t\t\t\t\t<option value=\"2\">アンチエイジング</option>
\t\t\t\t\t\t\t\t<option value=\"3\">集中力改善</option>
\t\t\t\t\t\t\t\t<option value=\"4\">睡眠改善</option>
\t\t\t\t\t\t\t\t<option value=\"5\">ダイエット</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-info\">更新する</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</main>
";
        // line 70
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/edit_sub.html.twig", 70)->display($context);
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
        return array (  171 => 70,  149 => 53,  133 => 42,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  98 => 30,  94 => 29,  89 => 27,  83 => 24,  77 => 23,  70 => 19,  64 => 16,  58 => 13,  53 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/edit_sub.html.twig", "/var/www/html/EC_shop/templates/admin/sub/edit_sub.html.twig");
    }
}
