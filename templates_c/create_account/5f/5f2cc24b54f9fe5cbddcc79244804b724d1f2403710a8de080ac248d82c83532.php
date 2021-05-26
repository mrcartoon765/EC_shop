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

/* /create_account/regist.html.twig */
class __TwigTemplate_3e5a15ebe083e1f4eeb022166973a04aa36402f0658014c579a701490d142bef extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/create_account/regist.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
<div class=\"wrapper last-wrapper register-wrapper\">
            <div class=\"container\">
                <div class=\"register\">
                    <div class=\"wrapper-title\">
                        <h3>REGISTER</h3>
                        <p>新規登録</p>
                    </div>
<form class=\"regi-form\" method=\"POST\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/confirm.php\">
<div class=\"form-group\">


メールアドレス<span class=\"error\">*</span>
<input type=\"email\" name=\"mail\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 15), "html", null, true);
        echo "\" size=\"40\">
";
        // line 16
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 16)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>";
        }
        // line 17
        echo "</div>
<div class=\"form-group\">
パスワード<span class=\"error\">*</span>
<input type=\"current-password\" name=\"password\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 20), "html", null, true);
        echo "\" size=\"40\">
";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 21)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>";
        }
        // line 22
        echo "</div>

<div class=\"form-group\">
お名前(氏名)<span class=\"error\">*</span>
<div class=\"form-group\">
姓<input type=\"text\" name=\"family_name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
名<input type=\"text\" name=\"first_name\"  value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
";
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 29)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>";
        }
        // line 30
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 30)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>";
        }
        // line 31
        echo "</div>


<div class=\"form-group\">
<br>お名前(かな)
<div class=\"form-group\"> 
せい<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
めい<input type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
</div>

<div class=\"form-group\">
生年月日<span class=\"error\">*</span>
<select name=\"year\" >
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 45
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 45) == $context["index"])) {
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
        // line 47
        echo "</select>
<select name='month'>
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 50
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 50) == $context["index"])) {
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
        // line 52
        echo "</select>
<select name='day'>
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 55
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 55) == $context["index"])) {
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
        // line 57
        echo "</select>
";
        // line 58
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 58)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>";
        }
        // line 59
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 59)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>";
        }
        // line 60
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 60)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 60), "html", null, true);
            echo "</span>";
        }
        // line 61
        echo "</div>


<div class=\"form-group\">
郵便番号<span class=\"error\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
<input type=\"text\" name=\"zip1\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 67), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -
<input type=\"text\" name=\"zip2\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 68), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">
</div>
";
        // line 71
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 71)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>";
        }
        // line 72
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 72)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>";
        }
        // line 73
        echo "</div>

<div class=\"form-group\">
住所<span class=\"error\">*</span>
<input type=\"text\" name=\"address\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 77), "html", null, true);
        echo "\" id=\"address\" size=\"40\">
";
        // line 78
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 78)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 78), "html", null, true);
            echo "</span>";
        }
        // line 79
        echo "</div>

<div class=\"form-group\">
電話番号<span class=\"error\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
<input type=\"text\" name=\"tel1\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 84), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel2\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 85), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel3\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 86), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
</div>
";
        // line 88
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 88)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 88), "html", null, true);
            echo "</span>";
        }
        // line 89
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 89)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 89), "html", null, true);
            echo "</span>";
        }
        // line 90
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 90)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 90), "html", null, true);
            echo "</span>";
        }
        // line 91
        echo "
<div class=\"form-group\">
備考
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 94), "html", null, true);
        echo "</textarea>
</div>
 <div class=\"form-group\">

<p>EC_BOOKからのお知らせを受信しますか？</p>
<input type=\"hidden\" name=\"dm\" value=\"受信しない\">
<input type=\"checkbox\" class=\"checkbox\" name=\"dm\" value=\"受信する\" checked>
<span>受信する</span>
</div>
<button type=\"submit\" name=\"confirm\" class=\"btn btn-submit\">内容を確認する</button>
</form>
</div>
</div>
</div>
</main>
 ";
        // line 109
        $this->loadTemplate("common/footer.html.twig", "/create_account/regist.html.twig", 109)->display($context);
    }

    public function getTemplateName()
    {
        return "/create_account/regist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 109,  305 => 94,  300 => 91,  294 => 90,  288 => 89,  282 => 88,  277 => 86,  273 => 85,  269 => 84,  262 => 79,  256 => 78,  252 => 77,  246 => 73,  240 => 72,  234 => 71,  228 => 68,  224 => 67,  216 => 61,  210 => 60,  204 => 59,  198 => 58,  195 => 57,  180 => 55,  176 => 54,  172 => 52,  157 => 50,  153 => 49,  149 => 47,  134 => 45,  130 => 44,  121 => 38,  117 => 37,  109 => 31,  103 => 30,  97 => 29,  93 => 28,  89 => 27,  82 => 22,  76 => 21,  72 => 20,  67 => 17,  61 => 16,  57 => 15,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/create_account/regist.html.twig", "/var/www/html/EC_shop/templates/create_account/regist.html.twig");
    }
}
