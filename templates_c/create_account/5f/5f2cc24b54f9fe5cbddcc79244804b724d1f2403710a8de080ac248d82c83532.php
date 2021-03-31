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

/* regist.html.twig */
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
        echo "<main>
<div class=\"wrapper last-wrapper register-wrapper\">
            <div class=\"container\">
                <div class=\"register\">
                    <div class=\"wrapper-title\">
                        <h3>REGISTER</h3>
                        <p>新規登録</p>
                    </div>
<form class=\"regi-form\" method=\"POST\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/confirm.php\">
<div class=\"form-group\">


メールアドレス<span class=\"red\">*</span>
<input type=\"text\" name=\"mail\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 14), "html", null, true);
        echo "\" size=\"40\">
";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 15)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>";
        }
        // line 16
        echo "</div>
<div class=\"form-group\">
パスワード<span class=\"red\">*</span>
<input type=\"text\" name=\"password\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 19), "html", null, true);
        echo "\" size=\"40\">
";
        // line 20
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 20)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>";
        }
        // line 21
        echo "</div>

<div class=\"form-group\">
お名前(氏名)<span class=\"red\">*</span>
<div class=\"form-group\">
姓<input type=\"text\" name=\"family_name\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
名<input type=\"text\" name=\"first_name\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
";
        // line 28
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 28)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>";
        }
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 29)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>";
        }
        // line 30
        echo "</div>


<div class=\"form-group\">
<br>お名前(かな)
<div class=\"form-group\"> 
せい<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
めい<input type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
</div>

<div class=\"form-group\">
生年月日<span class=\"red\">*</span>
<select name=\"year\" >
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 44
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 44) == $context["index"])) {
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
        echo "</select>
<select name='month'>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 49
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 49) == $context["index"])) {
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
        // line 51
        echo "</select>
<select name='day'>
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 54
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 54) == $context["index"])) {
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
        echo "</select>
";
        // line 57
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 57)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 57), "html", null, true);
            echo "</span>";
        }
        // line 58
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 58)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>";
        }
        // line 59
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 59)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>";
        }
        // line 60
        echo "</div>


<div class=\"form-group\">
郵便番号<span class=\"red\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
<input type=\"text\" name=\"zip1\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 66), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -
<input type=\"text\" name=\"zip2\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 67), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">
";
        // line 69
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 69)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 69), "html", null, true);
            echo "</span>";
        }
        // line 70
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 70)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>";
        }
        // line 71
        echo "</div>

<div class=\"form-group\">
住所<span class=\"red\">*</span>
<input type=\"text\" name=\"address\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 75), "html", null, true);
        echo "\" id=\"address\" size=\"40\">
";
        // line 76
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 76)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 76), "html", null, true);
            echo "</span>";
        }
        // line 77
        echo "</div>

<div class=\"form-group\">
電話番号<span class=\"red\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
<input type=\"tel\" name=\"tel1\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 82), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel2\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 83), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel3\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 84), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
";
        // line 85
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 85)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 85), "html", null, true);
            echo "</span>";
        }
        // line 86
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 86)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 86), "html", null, true);
            echo "</span>";
        }
        // line 87
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 87)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>";
        }
        // line 88
        echo "</div>

<div class=\"form-group\">
備考
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 92), "html", null, true);
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
</main>";
    }

    public function getTemplateName()
    {
        return "regist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 92,  296 => 88,  290 => 87,  284 => 86,  278 => 85,  274 => 84,  270 => 83,  266 => 82,  259 => 77,  253 => 76,  249 => 75,  243 => 71,  237 => 70,  231 => 69,  226 => 67,  222 => 66,  214 => 60,  208 => 59,  202 => 58,  196 => 57,  193 => 56,  178 => 54,  174 => 53,  170 => 51,  155 => 49,  151 => 48,  147 => 46,  132 => 44,  128 => 43,  119 => 37,  115 => 36,  107 => 30,  101 => 29,  95 => 28,  91 => 27,  87 => 26,  80 => 21,  74 => 20,  70 => 19,  65 => 16,  59 => 15,  55 => 14,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "/var/www/html/EC_shop/templates/create_account/regist.html.twig");
    }
}
