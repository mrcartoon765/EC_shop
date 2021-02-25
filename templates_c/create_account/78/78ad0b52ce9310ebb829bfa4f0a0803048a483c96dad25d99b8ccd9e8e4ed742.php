<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* regist.html.twig */
class __TwigTemplate_fb8cffda4a527e9f4a1a20f4cffa7a9c6fd3e766db82c73a00dfaebdf47268cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/common.js\"></script>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">
<title>会員登録</title>
</head>
<body>
<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\" >トップページへ</a>
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "\">
<form method=\"post\" action=\"confirm.php\">
<table>
<tr>
<th>メールアドレス<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"mail\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "mail", []), "html", null, true);
        echo "\" size=\"40\">
";
        // line 19
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "mail", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "mail", []), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "</td>
</tr>
<table>
<tr>
<th>パスワード<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"password\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "password", []), "html", null, true);
        echo "\" size=\"40\">
";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "password", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "password", []), "html", null, true);
            echo "</span>";
        }
        // line 28
        echo "</td>
</tr>
<tr>
<th>お名前(氏名)<span class=\"red\">*</span></th>
";
        // line 33
        echo "<td>
<input type=\"text\" name=\"family_name\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name", []), "html", null, true);
        echo "\">
<input type=\"text\" name=\"first_name\"  value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name", []), "html", null, true);
        echo "\">
";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", []), "html", null, true);
            echo "</span>";
        }
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", []), "html", null, true);
            echo "</span>";
        }
        // line 38
        echo "</td>
</tr>
<tr>
<th>お名前(かな)</th>
<td>
<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name_kana", []), "html", null, true);
        echo "\">
<input type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name_kana", []), "html", null, true);
        echo "\">
</td>
</tr>
<tr>
<th>性別<span class=\"red\">*</span></th>
<td>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sexArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 51
            echo "  <input type=\"radio\" name=\"sex\" value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" id=\"sex_";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "sex", []) == $context["index"])) {
                echo " checked=\"checked\" ";
            }
            echo ">
<label for=\"sex_";
            // line 52
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", []), "html", null, true);
            echo "</span>";
        }
        // line 55
        echo "</td>
</tr>
<tr>
<th>生年月日<span class=\"red\">*</span></th>
<td>
<select name=\"year\" >
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 62
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "year", []) == $context["index"])) {
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
        echo "</select>
<select name='month'>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 67
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "month", []) == $context["index"])) {
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
        echo "</select>
<select name='day'>
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 72
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "day", []) == $context["index"])) {
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
        // line 74
        echo "</select>
";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", []), "html", null, true);
            echo "</span>";
        }
        // line 76
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", []), "html", null, true);
            echo "</span>";
        }
        // line 77
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", []), "html", null, true);
            echo "</span>";
        }
        // line 78
        echo "</td>
</tr>
<tr>
<th>郵便番号<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"zip1\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip1", []), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -
<input type=\"text\" name=\"zip2\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip2", []), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">
";
        // line 86
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", []), "html", null, true);
            echo "</span>";
        }
        // line 87
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", []), "html", null, true);
            echo "</span>";
        }
        // line 88
        echo "</td>
</tr>
<tr>
<th>住所<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"address\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "address", []), "html", null, true);
        echo "\" id=\"address\" size=\"40\">
";
        // line 94
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", []), "html", null, true);
            echo "</span>";
        }
        // line 95
        echo "</td>
</tr>
<tr>
<th>電話番号<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"tel1\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel1", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel2\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel2", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel3\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel3", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
";
        // line 103
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", []), "html", null, true);
            echo "</span>";
        }
        // line 104
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", []), "html", null, true);
            echo "</span>";
        }
        // line 105
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", []), "html", null, true);
            echo "</span>";
        }
        // line 106
        echo "</td>
</tr>
<tr>
<th>備考</th>
<td>
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "contents", []), "html", null, true);
        echo "</textarea>
</td>
</tr>
</table>
<div>
<input type=\"submit\" name=\"confirm\" value=\"登録確認\">
</div>
</form>
</body>
</html>";
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
        return array (  352 => 111,  345 => 106,  339 => 105,  333 => 104,  327 => 103,  323 => 102,  319 => 101,  315 => 100,  308 => 95,  302 => 94,  298 => 93,  291 => 88,  285 => 87,  279 => 86,  274 => 84,  270 => 83,  263 => 78,  257 => 77,  251 => 76,  245 => 75,  242 => 74,  227 => 72,  223 => 71,  219 => 69,  204 => 67,  200 => 66,  196 => 64,  181 => 62,  177 => 61,  169 => 55,  163 => 54,  153 => 52,  142 => 51,  138 => 50,  129 => 44,  125 => 43,  118 => 38,  112 => 37,  106 => 36,  102 => 35,  98 => 34,  95 => 33,  89 => 28,  83 => 27,  79 => 26,  71 => 20,  65 => 19,  61 => 18,  52 => 12,  48 => 11,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "/Applications/MAMP/htdocs/portforio/templates/create_account/regist.html.twig");
    }
}
