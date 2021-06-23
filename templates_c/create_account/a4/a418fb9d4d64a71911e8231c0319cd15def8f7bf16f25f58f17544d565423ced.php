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

/* /create_account/confirm.html.twig */
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
        $this->loadTemplate("common/header.html.twig", "/create_account/confirm.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>CONFIRM</h3>
\t\t\t\t<p>登録内容確認</p>
\t\t\t</div>

\t\t\t<form method=\"POST\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/create_account/confirm.php\" class=\"conf-form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\tメールアドレス
\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 13), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"mail\" value=";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 14), "html", null, true);
        echo ">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\tパスワード
\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 19), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"password\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\tお名前(氏名)
\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 25), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"family_name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"first_name\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\tお名前(かな)
\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 33), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 34), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"family_name_kana\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"first_name_kana\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t生年月日
\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 41), "html", null, true);
        echo "年
\t\t\t\t\t<input type=\"hidden\" name=\"year\" value=";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 42), "html", null, true);
        echo ">
\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 43), "html", null, true);
        echo "月
\t\t\t\t\t<input type=\"hidden\" name=\"month\" value=";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 44), "html", null, true);
        echo ">
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 45), "html", null, true);
        echo "日
\t\t\t\t\t<input type=\"hidden\" name=\"day\" value=";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 46), "html", null, true);
        echo ">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t郵便番号
\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 51), "html", null, true);
        echo "
\t\t\t\t\t-
\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 53), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"zip1\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"zip2\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t住所
\t\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 60), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"address\" value=";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 61), "html", null, true);
        echo ">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t電話番号
\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 66), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 67), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 68), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"tel1\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"tel2\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 70), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"tel3\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
\t\t\t\t</div>


\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t備考
\t\t\t\t\t";
        // line 77
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 77), "html", null, true));
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"contents\" value ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 78), "html", null, true);
        echo ">
\t\t\t\t</div>


\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<p>SQUAREからのお知らせを受信しますか？</p>
\t\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 84), "html", null, true);
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"dm\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 85), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<p>この内容で送信してよろしいですか？</p>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"submit\" name=\"complete\" class=\"btn btn-submit\" value=\"送信する\">
\t\t\t\t\t<input type=\"submit\" name=\"back\" class=\"btn btn-submit\" value=\"戻る\">
\t\t\t\t</div>

\t\t\t</form>
\t\t</div>
\t</div>
</main>
";
        // line 99
        $this->loadTemplate("common/footer.html.twig", "/create_account/confirm.html.twig", 99)->display($context);
        // line 100
        echo "
";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 102
            echo "
\t";
            // line 103
            if (twig_test_iterable($context["value"])) {
                // line 104
                echo "
\t\t";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 106
                    echo "\t\t\t<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "[]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">

\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t";
            } else {
                // line 110
                echo "\t\t<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</div></form></body></html>
";
    }

    public function getTemplateName()
    {
        return "/create_account/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 112,  279 => 110,  276 => 109,  264 => 106,  260 => 105,  257 => 104,  255 => 103,  252 => 102,  248 => 101,  245 => 100,  243 => 99,  226 => 85,  222 => 84,  213 => 78,  209 => 77,  200 => 71,  196 => 70,  192 => 69,  188 => 68,  184 => 67,  180 => 66,  172 => 61,  168 => 60,  160 => 55,  156 => 54,  152 => 53,  147 => 51,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  119 => 41,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  71 => 20,  67 => 19,  59 => 14,  55 => 13,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/create_account/confirm.html.twig", "/var/www/html/EC_shop/templates/create_account/confirm.html.twig");
    }
}
