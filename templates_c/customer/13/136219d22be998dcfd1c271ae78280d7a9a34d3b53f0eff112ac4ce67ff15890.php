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

/* /customer/edit_customer.html.twig */
class __TwigTemplate_3c81382e37e9c4afd93b635ee40b0d18a9c44a88a45c50be794df0057260e66b extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/customer/edit_customer.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
            <div class=\"container\">
            <body class=\"text-center\">
            <div class=\"wrapper last-wrapper\">
  <main class=\"form-signin\">
                    <div class=\"wrapper-title\">
                        <h3>ユーザーデータ編集</h3>
                        <p>個人情報編集</p>
                    </div>
<form method=\"POST\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/confirm.php\">
お名前(氏名)<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col\">
姓<input class=\"text-center border-4 border-info\" type=\"text\" name=\"family_name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["customer"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["family_name"] ?? null) : null), "html", null, true);
        echo "\" required>
";
        // line 16
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 16)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>";
        }
        // line 17
        echo "</div>
<div class=\"col\">
名<input  class=\"text-center border-4 border-info\" type=\"text\" name=\"first_name\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["customer"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["first_name"] ?? null) : null), "html", null, true);
        echo "\" required>
";
        // line 20
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 20)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>";
        }
        // line 21
        echo "</div>
</div>
<br>
お名前(かな)
<div class=\"row\">
<div class=\"col\">
せい<input class=\"text-center border-4 border-info\" type=\"text\" name=\"family_name_kana\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["customer"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["family_name_kana"] ?? null) : null), "html", null, true);
        echo "\">
</div>
<div class=\"col\">
めい<input class=\"text-center border-4 border-info\" type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["customer"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["first_name_kana"] ?? null) : null), "html", null, true);
        echo "\">
</div>
</div>
<br>


生年月日<span class=\"error\">*</span>
<div class=\"row\">

<div class=\"col-2\"></div>

<div class=\"col px-0\">
<select name=\"year\" class=\"border-4 border-info\">
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 44
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
        // line 46
        echo "</select>年
</div>

<div class=\"col px-0\">
<select name='month' class=\"border-4 border-info\">
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 52
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
        // line 54
        echo "</select>月
</div>

<div class=\"col px-0\">
<select name='day' class=\"border-4 border-info\">
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 60
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
        // line 62
        echo "</select>日
";
        // line 63
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 63)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>";
        }
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 64)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>";
        }
        // line 65
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 65)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>";
        }
        // line 66
        echo "</div>

<div class=\"col-2\"></div>

</div>

<br>
郵便番号<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col px-0\">
<input type=\"number\" name=\"zip1\" class=\"text-center border-4 border-info\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["customer"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["zip1"] ?? null) : null), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"1000\"  required>
";
        // line 77
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 77)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 77), "html", null, true);
            echo "</span>";
        }
        // line 78
        echo "</div>
ー
<div class=\"col px-0\">
<input type=\"number\" name=\"zip2\" class=\"text-center border-4 border-info\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["customer"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["zip2"] ?? null) : null), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"10000\"  required>
";
        // line 82
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 82)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 82), "html", null, true);
            echo "</span>";
        }
        // line 83
        echo "</div>
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"../create_account/\">
<button type=\"button\" class=\"btn btn-submit btn-gray\" name=\"address_search\" id=\"address_search\">〒から住所を入力</button>

</div>
住所<span class=\"error\">*</span>
<input type=\"text\" name=\"address\" class=\"text-center border-4 border-info\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["customer"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["address"] ?? null) : null), "html", null, true);
        echo "\" id=\"address\" size=\"40\"  required>
";
        // line 90
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 90)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 90), "html", null, true);
            echo "</span>";
        }
        // line 91
        echo "<br>
電話番号<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col\">
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"tel1\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["customer"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["tel1"] ?? null) : null), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"  required>
</div>ー
<div class=\"col\">
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"tel2\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["customer"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["tel2"] ?? null) : null), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"  required>
</div>ー
<div class=\"col\">
<input class=\"text-center border-4 border-info\" type=\"text\" name=\"tel3\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["customer"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["tel3"] ?? null) : null), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"  required>
</div>
";
        // line 103
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 103)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 103), "html", null, true);
            echo "</span>";
        }
        // line 104
        echo "</div>
<br>
備考
<textarea class=\"border-4 border-info\" name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 107
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["customer"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["contents"] ?? null) : null), "html", null, true);
        echo "</textarea>

<p>EC_BOOKからのお知らせを受信しますか？</p>
<input type=\"hidden\" name=\"dm\" value=\"受信しない\">
<input type=\"checkbox\" class=\"checkbox\" name=\"dm\" value=\"受信する\" checked>
<span>受信する</span>

<div class=\"text-center d-grid gap-2\">
<br>
<input type=\"hidden\" name=\"edit_customer\" method=\"POST\" value=\"1\">
<button type=\"submit\" name=\"confirm\" value=1 class=\"btn btn-submit\">内容を確認する</button>
</div>
</form>
</main>
</div>
            </body>
</div>
 ";
        // line 124
        $this->loadTemplate("common/footer.html.twig", "/customer/edit_customer.html.twig", 124)->display($context);
    }

    public function getTemplateName()
    {
        return "/customer/edit_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 124,  292 => 107,  287 => 104,  281 => 103,  276 => 101,  270 => 98,  264 => 95,  258 => 91,  252 => 90,  248 => 89,  240 => 83,  234 => 82,  230 => 81,  225 => 78,  219 => 77,  215 => 76,  203 => 66,  197 => 65,  191 => 64,  185 => 63,  182 => 62,  167 => 60,  163 => 59,  156 => 54,  141 => 52,  137 => 51,  130 => 46,  115 => 44,  111 => 43,  95 => 30,  89 => 27,  81 => 21,  75 => 20,  71 => 19,  67 => 17,  61 => 16,  57 => 15,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/customer/edit_customer.html.twig", "/var/www/html/EC_shop/templates/customer/edit_customer.html.twig");
    }
}
