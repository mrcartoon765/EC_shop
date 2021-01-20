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
class __TwigTemplate_416f77464570a9761a378363a46d63cd39eb668cfac9a11a570af14d1b72c39c extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_constant("create_account\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/common.js\"></script>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("create_account\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">
<title>会員登録</title>
</head>
<body>
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("create_account\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "\">
<form method=\"post\" action=\"confirm.php\">
<table>
<tr>
<th>お名前(氏名)<span class=\"red\">*</span></th>
";
        // line 17
        echo "<td>
<input type=\"text\" name=\"family_name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name", []), "html", null, true);
        echo "\">
<input type=\"text\" name=\"first_name\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name", []), "html", null, true);
        echo "\">
";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", []), "html", null, true);
            echo "</span>";
        }
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", []), "html", null, true);
            echo "</span>";
        }
        // line 22
        echo "</td>
</tr>
<tr>
<th>お名前(かな)</th>
<td>
<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name_kana", []), "html", null, true);
        echo "\">
<input type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name_kana", []), "html", null, true);
        echo "\">
</td>
</tr>
<tr>
<th>性別<span class=\"red\">*</span></th>
<td>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sexArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 35
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
            // line 36
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", []), "html", null, true);
            echo "</span>";
        }
        // line 39
        echo "</td>
</tr>
<tr>
<th>生年月日<span class=\"red\">*</span></th>
<td>
<select name=\"year\" >
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 46
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
        // line 48
        echo "</select>
<select name='month'>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 51
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
        // line 53
        echo "</select>
<select name='day'>
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 56
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
        // line 58
        echo "</select>
";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", []), "html", null, true);
            echo "</span>";
        }
        // line 60
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", []), "html", null, true);
            echo "</span>";
        }
        // line 61
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", []), "html", null, true);
            echo "</span>";
        }
        // line 62
        echo "</td>
</tr>
<tr>
<th>郵便番号<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"zip1\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip1", []), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -
<input type=\"text\" name=\"zip2\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip2", []), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">
";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", []), "html", null, true);
            echo "</span>";
        }
        // line 71
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", []), "html", null, true);
            echo "</span>";
        }
        // line 72
        echo "</td>
</tr>
<tr>
<th>住所<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"address\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "address", []), "html", null, true);
        echo "\" id=\"address\" size=\"40\">
";
        // line 78
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", []), "html", null, true);
            echo "</span>";
        }
        // line 79
        echo "</td>
</tr>
<tr>
<th>メールアドレス<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"email\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "email", []), "html", null, true);
        echo "\" size=\"40\">
";
        // line 85
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", []), "html", null, true);
            echo "</span>";
        }
        // line 86
        echo "</td>
</tr>
<tr>
<th>電話番号<span class=\"red\">*</span></th>
<td>
<input type=\"text\" name=\"tel1\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel1", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel2\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel2", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel3\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel3", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
";
        // line 94
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", []), "html", null, true);
            echo "</span>";
        }
        // line 95
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", []), "html", null, true);
            echo "</span>";
        }
        // line 96
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", []), "html", null, true);
            echo "</span>";
        }
        // line 97
        echo "</td>
</tr>
<tr>
<th>備考</th>
<td>
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 102
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
        return array (  330 => 102,  323 => 97,  317 => 96,  311 => 95,  305 => 94,  301 => 93,  297 => 92,  293 => 91,  286 => 86,  280 => 85,  276 => 84,  269 => 79,  263 => 78,  259 => 77,  252 => 72,  246 => 71,  240 => 70,  235 => 68,  231 => 67,  224 => 62,  218 => 61,  212 => 60,  206 => 59,  203 => 58,  188 => 56,  184 => 55,  180 => 53,  165 => 51,  161 => 50,  157 => 48,  142 => 46,  138 => 45,  130 => 39,  124 => 38,  114 => 36,  103 => 35,  99 => 34,  90 => 28,  86 => 27,  79 => 22,  73 => 21,  67 => 20,  63 => 19,  59 => 18,  56 => 17,  48 => 11,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "/var/www/html/portforio/templates/create_account/regist.html.twig");
    }
}
