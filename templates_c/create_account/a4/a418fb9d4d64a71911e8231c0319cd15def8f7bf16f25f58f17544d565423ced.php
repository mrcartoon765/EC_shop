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
        // line 65
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/confirm.php\" class=\"conf-form\">
                    <div class=\"form-group\">
                        メールアドレス
                        ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 68), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"mail\" value=";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 69), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                        パスワード
                        ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 74), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"password\" value=";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 75), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                        お名前(氏名)
                        ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 80), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 80), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"family_name\" value=";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 81), "html", null, true);
        echo ">
                        <input type=\"hidden\" name=\"first_name\" value=";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 82), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                        お名前(かな)
                        ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 87), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 87), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"family_name_kana\" value=";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 88), "html", null, true);
        echo ">
                        <input type=\"hidden\" name=\"first_name_kana\" value=";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 89), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    生年月日
                    ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 94), "html", null, true);
        echo "年 <input type=\"hidden\" name=\"year\" value
                    =";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 95), "html", null, true);
        echo ">
                    ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 96), "html", null, true);
        echo "月 <input type=\"hidden\" name=\"month\" value
                    =";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 97), "html", null, true);
        echo ">
                    ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 98), "html", null, true);
        echo "日 <input type=\"hidden\" name=\"day\" value
                    =";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 99), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    郵便番号
                    ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 104), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 104), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"zip1\" value=";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 105), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"zip2\" value=";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 106), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    住所
                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 111), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"address\" value=";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 112), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    電話番号
                    ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 117), "html", null, true);
        echo "
                    ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 118), "html", null, true);
        echo "
                    ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 119), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"tel1\" value=";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 120), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"tel2\" value=";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 121), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"tel3\" value=";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 122), "html", null, true);
        echo ">
                    </div>

                    
                    <div class=\"form-group\">
                    備考
                    ";
        // line 128
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 128), "html", null, true));
        echo "
                    <input type=\"hidden\" name=\"contents\" value";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 129), "html", null, true);
        echo ">
                    </div>
                    
                    
                    <div class=\"form-group\">
                    <p>SQUAREからのお知らせを受信しますか？</p>
                    ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 135), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"dm\" value=";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 136), "html", null, true);
        echo ">
                    </div>

                    <p>この内容で送信してよろしいですか？</p>
                    
                    <div class=\"form-group\">
                    <input type=\"submit\" name=\"complete\" class=\"btn btn-submit\" value=\"送信する\">
                    <input type=\"submit\" name=\"back\" class=\"btn btn-submit\" value=\"戻る\">
                    </div>

                </form>
            </div>
        </div>
</main>

";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 152
            echo "
";
            // line 153
            if (twig_test_iterable($context["value"])) {
                // line 154
                echo "
";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 156
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
                // line 160
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
        // line 163
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
        return array (  376 => 163,  364 => 160,  351 => 156,  347 => 155,  344 => 154,  342 => 153,  339 => 152,  335 => 151,  317 => 136,  313 => 135,  304 => 129,  300 => 128,  291 => 122,  287 => 121,  283 => 120,  279 => 119,  275 => 118,  271 => 117,  263 => 112,  259 => 111,  251 => 106,  247 => 105,  241 => 104,  233 => 99,  229 => 98,  225 => 97,  221 => 96,  217 => 95,  213 => 94,  205 => 89,  201 => 88,  195 => 87,  187 => 82,  183 => 81,  177 => 80,  169 => 75,  165 => 74,  157 => 69,  153 => 68,  147 => 65,  131 => 52,  124 => 48,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  98 => 37,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  63 => 19,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm.html.twig", "/var/www/html/EC_shop/templates/create_account/confirm.html.twig");
    }
}
