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
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/common.js\"></script>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_CSS"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_RESPONSIVE"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<title>会員登録</title>
</head>

<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
<h1><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "\"><img src= \"";
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "image/square_logo-1024x192.png\" id=\"logo\"></a><h1>
  </div>

  <div class=\"toggle\">
  <div>
  <span></span>
  <span></span>
  <span></span>
  </div>
  </div>

  <nav class=\"sp-menu menu\">
  <ul>
  <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a></li>
  </ul>
  </nav>

  <nav class=\"pc-menu menu-left menu\">
  <ul>
  <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a></li>
  </ul>
  </nav>
<nav class=\"pc-menu menu-right menu\">
    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a>
</nav>
  </div>
  </header>
<main>
<div class=\"wrapper last-wrapper register-wrapper\">
            <div class=\"container\">
                <div class=\"register\">
                    <div class=\"wrapper-title\">
                        <h3>REGISTER</h3>
                        <p>新規登録</p>
                    </div>
<form method=\"post\" action=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_constant("config//Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/confirm.php\">
<div class=\"form-group\">
メールアドレス<span class=\"red\">*</span>
<input type=\"text\" name=\"mail\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 64), "html", null, true);
        echo "\" size=\"40\">
";
        // line 65
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 65)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "mail", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>";
        }
        // line 66
        echo "</div>
<div class=\"form-group\">
パスワード<span class=\"red\">*</span>
<input type=\"text\" name=\"password\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 69), "html", null, true);
        echo "\" size=\"40\">
";
        // line 70
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 70)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "password", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>";
        }
        // line 71
        echo "</div>


お名前(氏名)<span class=\"red\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
姓<input type=\"text\" name=\"family_name\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
名<input type=\"text\" name=\"first_name\"  value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 77), "html", null, true);
        echo "\">
";
        // line 78
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 78)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "family_name", [], "any", false, false, false, 78), "html", null, true);
            echo "</span>";
        }
        // line 79
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 79)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "first_name", [], "any", false, false, false, 79), "html", null, true);
            echo "</span>";
        }
        // line 80
        echo "</div>

<br>お名前(かな)
<div class=\"form-group\" style=\"display:inline-flex\">
せい<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
めい<input type=\"text\" name=\"first_name_kana\"  value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 85), "html", null, true);
        echo "\">
</div>

<div class=\"form-group\">
生年月日<span class=\"red\">*</span>
<select name=\"year\" >
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 92
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 92) == $context["index"])) {
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
        // line 94
        echo "</select>
<select name='month'>
";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 97
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 97) == $context["index"])) {
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
        // line 99
        echo "</select>
<select name='day'>
";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 102
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 102) == $context["index"])) {
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
        // line 104
        echo "</select>
";
        // line 105
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 105)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "year", [], "any", false, false, false, 105), "html", null, true);
            echo "</span>";
        }
        // line 106
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 106)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "month", [], "any", false, false, false, 106), "html", null, true);
            echo "</span>";
        }
        // line 107
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 107)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "day", [], "any", false, false, false, 107), "html", null, true);
            echo "</span>";
        }
        // line 108
        echo "</div>

郵便番号<span class=\"red\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
<input type=\"text\" name=\"zip1\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 112), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -
<input type=\"text\" name=\"zip2\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 113), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">
";
        // line 115
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 115)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip1", [], "any", false, false, false, 115), "html", null, true);
            echo "</span>";
        }
        // line 116
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 116)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "zip2", [], "any", false, false, false, 116), "html", null, true);
            echo "</span>";
        }
        // line 117
        echo "</div>

<div class=\"form-group\">
住所<span class=\"red\">*</span>
<input type=\"text\" name=\"address\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 121), "html", null, true);
        echo "\" id=\"address\" size=\"40\">
";
        // line 122
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 122)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "address", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>";
        }
        // line 123
        echo "</div>

電話番号<span class=\"red\">*</span>
<div class=\"form-group\" style=\"display:inline-flex\">
<input type=\"tel\" name=\"tel1\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 127), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel2\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 128), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -
<input type=\"text\" name=\"tel3\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 129), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">
";
        // line 130
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 130)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel1", [], "any", false, false, false, 130), "html", null, true);
            echo "</span>";
        }
        // line 131
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 131)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel2", [], "any", false, false, false, 131), "html", null, true);
            echo "</span>";
        }
        // line 132
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 132)) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errArr"] ?? null), "tel3", [], "any", false, false, false, 132), "html", null, true);
            echo "</span>";
        }
        // line 133
        echo "</div>

<div class=\"form-group\">
備考
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 137), "html", null, true);
        echo "</textarea>
</div>
 <div class=\"form-group\">

<p>EC_BOOKからのお知らせを受信しますか？</p>
<input type=\"hidden\" name=\"dm\" value=\"受信しない\">
<input type=\"checkbox\" class=\"checkbox\" name=\"dm\" value=\"受信する\" checked>
<span>受信する</span>
</div>
<input type=\"submit\" name=\"confirm\" class=\"btn btn-submit\" value=\"内容を確認する\">
</form>
</div>
</div>
</div>
</main>
</form>
</body>
  <footer>
        <div class=\"container\">
            <p>Copyright @ 2018 SQUARE, inc.</p>
        </div>
    </footer>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script>
        \$(function () {
            // ハンバーガーメニューの動作
            \$('.toggle').click(function () {
                \$(\"header\").toggleClass('open');
                \$(\".sp-menu\").slideToggle(500);
            });

        });

    </script>
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
        return array (  394 => 137,  388 => 133,  382 => 132,  376 => 131,  370 => 130,  366 => 129,  362 => 128,  358 => 127,  352 => 123,  346 => 122,  342 => 121,  336 => 117,  330 => 116,  324 => 115,  319 => 113,  315 => 112,  309 => 108,  303 => 107,  297 => 106,  291 => 105,  288 => 104,  273 => 102,  269 => 101,  265 => 99,  250 => 97,  246 => 96,  242 => 94,  227 => 92,  223 => 91,  214 => 85,  210 => 84,  204 => 80,  198 => 79,  192 => 78,  188 => 77,  184 => 76,  177 => 71,  171 => 70,  167 => 69,  162 => 66,  156 => 65,  152 => 64,  146 => 61,  131 => 49,  124 => 45,  119 => 43,  115 => 42,  111 => 41,  107 => 40,  98 => 34,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  63 => 16,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "/var/www/html/EC_shop/templates/create_account/regist.html.twig");
    }
}
