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

/* /admin/user/edit_user.html.twig */
class __TwigTemplate_99b9eae26e926da334140df0db7a2ab65c950f7711e4c63257c2b2ab68ce7da6 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/user/edit_user.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>ユーザー編集</h3>
                </div>
                <form class=\"edit-form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ADMIN"] ?? null), "html", null, true);
        echo "/user/update_user.php\" method=\"POST\">

<h3>
お名前(氏名)
</h3>
<br>
<div class=\"row\">
<div class=\"col\">
<h4>姓</h4><input class=\"text-center border-4 border-info\" type=\"text\" name=\"family_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["customer"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["family_name"] ?? null) : null), "html", null, true);
        echo "\" required>
</div>
<div class=\"col\">
<h4>名</h4><input  class=\"text-center border-4 border-info\" type=\"text\" name=\"first_name\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["customer"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["first_name"] ?? null) : null), "html", null, true);
        echo "\" required>
</div>
</div>
<br>
<h3>
お名前(かな)
</h3>
<br>
<div class=\"row\">
<div class=\"col\">
<h4>
せい
</h4>
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"family_name_kana\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["customer"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["family_name_kana"] ?? null) : null), "html", null, true);
        echo "\">
</div>
<div class=\"col\">
<h4>
めい
</h4>
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 38
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["customer"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["first_name_kana"] ?? null) : null), "html", null, true);
        echo "\">
</div>
</div>
<br>


<h3>
生年月日*
</h3>
<div class=\"row\">

<div class=\"col-2\"></div>

<div class=\"col px-0\">
<select name=\"year\" class=\"border-4 border-info\">
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 54
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((($context["year"] ?? null) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</select>年
</div>

<div class=\"col px-0\">
<select name='month' class=\"border-4 border-info\">
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 62
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((($context["month"] ?? null) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</select>月
</div>

<div class=\"col px-0\">
<select name='day' class=\"border-4 border-info\">
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 70
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((($context["day"] ?? null) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</select>日
";
        // line 73
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 73)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>";
        }
        // line 74
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 74)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 74), "html", null, true);
            echo "</span>";
        }
        // line 75
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 75)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 75), "html", null, true);
            echo "</span>";
        }
        // line 76
        echo "</div>

<div class=\"col-2\"></div>

</div>

<br>
<h3>
郵便番号*
</h3>
<div class=\"row\">
<div class=\"col px-0\">
<input type=\"number\" name=\"zip1\" class=\"text-center border-4 border-info\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["customer"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["zip1"] ?? null) : null), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"1000\"  required>
";
        // line 89
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 89)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 89), "html", null, true);
            echo "</span>";
        }
        // line 90
        echo "</div>
ー
<div class=\"col px-0\">
<input type=\"number\" name=\"zip2\" class=\"text-center border-4 border-info\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["customer"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["zip2"] ?? null) : null), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"10000\"  required>
";
        // line 94
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 94)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 94), "html", null, true);
            echo "</span>";
        }
        // line 95
        echo "</div>
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/\">
<br><p></p>
<button type=\"button\" class=\"btn btn-submit btn-primary\" name=\"address_search\" id=\"address_search\">〒から住所を入力</button>

</div>
<h3>
住所*
</h3>
<input type=\"text\" name=\"address\" class=\"text-center border-4 border-info\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["customer"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["address"] ?? null) : null), "html", null, true);
        echo "\" id=\"address\" size=\"40\"  required>
";
        // line 105
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 105)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 105), "html", null, true);
            echo "</span>";
        }
        // line 106
        echo "<br><p></p>
<h3>
電話番号*
</h3>
<div class=\"row\">
<div class=\"col\">
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"tel1\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["customer"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["tel1"] ?? null) : null), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"  required>
</div>ー
<div class=\"col\">
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"tel2\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["customer"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["tel2"] ?? null) : null), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"  required>
</div>ー
<div class=\"col\">
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"tel3\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["customer"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["tel3"] ?? null) : null), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"  required>
</div>
";
        // line 120
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 120)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 120), "html", null, true);
            echo "</span>";
        }
        // line 121
        echo "</div>
<br>
<h3>
備考
</h3>
<textarea class=\"border-4 border-info\" name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 126
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["customer"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["contents"] ?? null) : null), "html", null, true);
        echo "</textarea>

<h5 class=\"text-center\">EC_BOOKからのお知らせを受信しますか？</h5>
<br><p></p>
<div class=\"row\">
<div class=\"col\">
<h5 class=\"text-center\">受信する</h5>
</div>
<div class=\"col\">
<input type=\"hidden\" name=\"dm\" value=\"0\">
<input type=\"checkbox\" class=\"checkbox\" name=\"dm\" value=\"1\" checked>
</div>
</div>

<div class=\"text-center d-grid gap-2\">
<br>
<input type=\"hidden\" name=\"customer_id\" method=\"POST\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">

<button type=\"submit\" class=\"btn btn-submit btn-success\">更新する</button>
</div>
</form>
</div>
</div>
</main>
 ";
        // line 150
        $this->loadTemplate("common/footer.html.twig", "/admin/user/edit_user.html.twig", 150)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/user/edit_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 150,  319 => 142,  300 => 126,  293 => 121,  287 => 120,  282 => 118,  276 => 115,  270 => 112,  262 => 106,  256 => 105,  252 => 104,  241 => 96,  238 => 95,  232 => 94,  228 => 93,  223 => 90,  217 => 89,  213 => 88,  199 => 76,  193 => 75,  187 => 74,  181 => 73,  178 => 72,  163 => 70,  159 => 69,  152 => 64,  137 => 62,  133 => 61,  126 => 56,  111 => 54,  107 => 53,  89 => 38,  80 => 32,  64 => 19,  58 => 16,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/user/edit_user.html.twig", "/var/www/html/EC_shop/templates/admin/user/edit_user.html.twig");
    }
}
