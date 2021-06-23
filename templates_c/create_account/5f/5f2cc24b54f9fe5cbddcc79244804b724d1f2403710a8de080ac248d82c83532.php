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
            <div class=\"container\">
  <body class=\"text-center\">
  <div class=\"wrapper last-wrapper\">
  <main class=\"form-signin\">
                    <div class=\"wrapper-title\">
                        <h3>REGISTER</h3>
                        <p>新規会員登録</p>
                    </div>
<form method=\"POST\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
        echo "confirm.php\">
メールアドレス<span class=\"error\">*</span>
<input class=\"border-4 border-info\" type=\"email\" name=\"mail\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 13), "html", null, true);
        echo "\" size=\"40\">
";
        // line 14
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 14)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>";
        }
        // line 15
        echo "<br>
パスワード<span class=\"error\">*</span>
<input class=\"border-4 border-info\"  type=\"current-password\" name=\"password\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 17), "html", null, true);
        echo "\" size=\"40\">
";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 18)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>";
        }
        // line 19
        echo "<br>
お名前(氏名)<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col\">
姓<input class=\"border-4 border-info\"  type=\"text\" name=\"family_name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 24)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>";
        }
        // line 25
        echo "</div>
<div class=\"col\">
名<input class=\"border-4 border-info\"  type=\"text\" name=\"first_name\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
";
        // line 28
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 28)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>";
        }
        // line 29
        echo "</div>
</div>
<br>
お名前(かな)<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col\">
せい<input class=\"border-4 border-info\"  type=\"text\" name=\"family_name_kana\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
</div>
<div class=\"col\">
めい<input class=\"border-4 border-info\"  type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
</div>
</div>
<br>

生年月日<span class=\"error\">*</span>
<div class=\"row\">

<div class=\"col-2\"></div>

<div class=\"col px-0\">
<select class=\"border-4 border-info\"  name=\"year\" >
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 51
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 51) == $context["index"])) {
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
        // line 53
        echo "</select>年
</div>

<div class=\"col px-0\">
<select class=\"border-4 border-info\"  name='month'>
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 59
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 59) == $context["index"])) {
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
        // line 61
        echo "</select>月
</div>

<div class=\"col px-0\">
<select class=\"border-4 border-info\"  name='day'>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 67
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 67) == $context["index"])) {
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
        // line 69
        echo "</select>日
";
        // line 70
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 70)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>";
        }
        // line 71
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 71)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>";
        }
        // line 72
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 72)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>";
        }
        // line 73
        echo "</div>

<div class=\"col-2\"></div>

</div>

<br>
郵便番号<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col px-0\">
<input class=\"border-4 border-info\"  type=\"text\" name=\"zip1\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 83), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\">
";
        // line 84
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 84)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 84), "html", null, true);
            echo "</span>";
        }
        // line 85
        echo "</div>
ー
<div class=\"col px-0\">
<input class=\"border-4 border-info\"  type=\"text\" name=\"zip2\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 88), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
";
        // line 89
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 89)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 89), "html", null, true);
            echo "</span>";
        }
        // line 90
        echo "</div>
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "\">
<button type=\"button\" class=\"btn btn-submit btn-gray\" name=\"address_search\" id=\"address_search\">〒から住所を入力</button>

</div>
住所<span class=\"error\">*</span>
<input class=\"border-4 border-info\"  type=\"text\" name=\"address\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 96), "html", null, true);
        echo "\" id=\"address\" size=\"40\">
";
        // line 97
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 97)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 97), "html", null, true);
            echo "</span>";
        }
        // line 98
        echo "<br>
電話番号<span class=\"error\">*</span>
<div class=\"row\">
<div class=\"col\">
<input class=\"border-4 border-info\"  type=\"text\" name=\"tel1\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 102), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
</div>ー
<div class=\"col\">
<input class=\"border-4 border-info\"  type=\"text\" name=\"tel2\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 105), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
</div>ー
<div class=\"col\">
<input class=\"border-4 border-info\"  type=\"text\" name=\"tel3\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 108), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
</div>
";
        // line 110
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 110)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 110), "html", null, true);
            echo "</span>";
        }
        // line 111
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 111)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>";
        }
        // line 112
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 112)) > 0)) {
            echo "<br><span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>";
        }
        // line 113
        echo "</div>
<br>
備考
<textarea class=\"border-4 border-info\"  name=\"contents\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 116), "html", null, true);
        echo "</textarea>

<p>EC_BOOKからのお知らせを受信しますか？</p>
<input type=\"hidden\" name=\"dm\" value=\"受信しない\">
<input type=\"checkbox\" class=\"checkbox\" name=\"dm\" value=\"受信する\" checked>
<span>受信する</span>
<div class=\"text-center d-grid gap-2\">
<br>
<button type=\"submit\" name=\"confirm\" class=\"btn btn-submit\">内容を確認する</button>
</div>
</form>
</main>
</div>
</body>
</div>
 ";
        // line 131
        $this->loadTemplate("common/footer.html.twig", "/create_account/regist.html.twig", 131)->display($context);
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
        return array (  352 => 131,  334 => 116,  329 => 113,  323 => 112,  317 => 111,  311 => 110,  306 => 108,  300 => 105,  294 => 102,  288 => 98,  282 => 97,  278 => 96,  270 => 91,  267 => 90,  261 => 89,  257 => 88,  252 => 85,  246 => 84,  242 => 83,  230 => 73,  224 => 72,  218 => 71,  212 => 70,  209 => 69,  194 => 67,  190 => 66,  183 => 61,  168 => 59,  164 => 58,  157 => 53,  142 => 51,  138 => 50,  123 => 38,  117 => 35,  109 => 29,  103 => 28,  99 => 27,  95 => 25,  89 => 24,  85 => 23,  79 => 19,  73 => 18,  69 => 17,  65 => 15,  59 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/create_account/regist.html.twig", "/var/www/html/EC_shop/templates/create_account/regist.html.twig");
    }
}
