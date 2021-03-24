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

/* confirm.html.twig */
class __TwigTemplate_09d7fedd04b273f914ad56b5fe62f605ab05f00686425cc5f3a4b3247fb71abd extends \Twig\Template
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>登録内容確認｜SQUARE, inc.</title>

    <link rel=\"icon\" href=\"favicon.ico\">

<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_CSS"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::DEFAULT_RESPONSIVE"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
  <header>
  <div class=\"container\">
  <div class=\"header-logo\">
<h1><a href=\"";
        // line 19
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
        // line 32
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a></li>
  </ul>
  </nav>

  <nav class=\"pc-menu menu-left menu\">
  <ul>
  <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#service\">サービス</a></li>
  <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#news\">お知らせ</a></li>
  <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#about\">会社概要</a></li>
  <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "index.php#contact\">お問合せ</a></li>
  <li><a href=\"https://mrcartoon995970419.wordpress.com/\">ブログ</a></li>
  <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a></li>
  </ul>
  </nav>
<nav class=\"pc-menu menu-right menu\">
    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/index.php\">会員登録</a>
</nav>
  </div>
  </header>

<main>
<div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>CONFIRM</h3>
                    <p>登録内容確認</p>
                </div>
                <form method=\"POST\" action=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/confirm.php\" class=\"conf-form\">
                    <div class=\"form-group\">
                        メールアドレス
                        ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 67), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"mail\" value=";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 68), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                        パスワード
                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 72), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"password\" value=";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 73), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                        お名前(氏名)
                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 77), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 77), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"family_name\" value=";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 78), "html", null, true);
        echo ">
                        <input type=\"hidden\" name=\"first_name\" value=";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 79), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                        お名前(かな)
                        ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 83), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 83), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"family_name_kana\" value=";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 84), "html", null, true);
        echo ">
                        <input type=\"hidden\" name=\"first_name_kana\" value=";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 85), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                    生年月日
                    ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 89), "html", null, true);
        echo "年 <input type=\"hidden\" name=\"year\" value
                    =";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 90), "html", null, true);
        echo ">
                    ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 91), "html", null, true);
        echo "月 <input type=\"hidden\" name=\"month\" value
                    =";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 92), "html", null, true);
        echo ">
                    ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 93), "html", null, true);
        echo "日 <input type=\"hidden\" name=\"day\" value
                    =";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 94), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                    郵便番号
                    ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 98), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 98), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"zip1\" value=";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 99), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"zip2\" value=";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 100), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                    住所
                    ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 104), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"address\" value=";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 105), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                    電話番号
                    ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 109), "html", null, true);
        echo "
                    ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 110), "html", null, true);
        echo "
                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 111), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"tel1\" value=";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 112), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"tel2\" value=";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 113), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"tel3\" value=";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 114), "html", null, true);
        echo ">
                    </div>

                    備考
                    ";
        // line 118
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 118), "html", null, true));
        echo "
                    <div class=\"form-group\">
                    <input type=\"hidden\" name=\"contents\" value";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 120), "html", null, true);
        echo ">
                    </div>
                    SQUAREからのお知らせを受信しますか？
                    <div class=\"form_group\">
                    ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 124), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"dm\" value=";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 125), "html", null, true);
        echo ">
                    </div>
                    <div class=\"form-group\">
                    <p>この内容で送信してよろしいですか？</p>
                    <input type=\"submit\" name=\"complete\" class=\"btn btn-submit\" value=\"送信する\">
                    <input type=\"submit\" name=\"back\" class=\"btn btn-submit\" value=\"戻る\">
                </form>
            </div>
        </div>
</main>

";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 137
            echo "
";
            // line 138
            if (twig_test_iterable($context["value"])) {
                // line 139
                echo "
";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 141
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "[]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">

";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 145
                echo "<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 148,  349 => 145,  336 => 141,  332 => 140,  329 => 139,  327 => 138,  324 => 137,  320 => 136,  306 => 125,  302 => 124,  295 => 120,  290 => 118,  283 => 114,  279 => 113,  275 => 112,  271 => 111,  267 => 110,  263 => 109,  256 => 105,  252 => 104,  245 => 100,  241 => 99,  235 => 98,  228 => 94,  224 => 93,  220 => 92,  216 => 91,  212 => 90,  208 => 89,  201 => 85,  197 => 84,  191 => 83,  184 => 79,  180 => 78,  174 => 77,  167 => 73,  163 => 72,  156 => 68,  152 => 67,  146 => 64,  131 => 52,  124 => 48,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  98 => 37,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  63 => 19,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm.html.twig", "/var/www/html/EC_shop/templates/create_account/confirm.html.twig");
    }
}
