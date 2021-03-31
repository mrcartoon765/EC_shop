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
        echo "<main>
<div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>CONFIRM</h3>
                    <p>登録内容確認</p>
                </div>

                <form method=\"POST\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/create_account/confirm.php\" class=\"conf-form\">
                    <div class=\"form-group\">
                        メールアドレス
                        ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 12), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"mail\" value=";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "mail", [], "any", false, false, false, 13), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                        パスワード
                        ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 18), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"password\" value=";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "password", [], "any", false, false, false, 19), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                        お名前(氏名)
                        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 24), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"family_name\" value=";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name", [], "any", false, false, false, 25), "html", null, true);
        echo ">
                        <input type=\"hidden\" name=\"first_name\" value=";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name", [], "any", false, false, false, 26), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                        お名前(かな)
                        ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 31), "html", null, true);
        echo "
                        <input type=\"hidden\" name=\"family_name_kana\" value=";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "family_name_kana", [], "any", false, false, false, 32), "html", null, true);
        echo ">
                        <input type=\"hidden\" name=\"first_name_kana\" value=";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "first_name_kana", [], "any", false, false, false, 33), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    生年月日
                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 38), "html", null, true);
        echo "年 <input type=\"hidden\" name=\"year\" value
                    =";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "year", [], "any", false, false, false, 39), "html", null, true);
        echo ">
                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 40), "html", null, true);
        echo "月 <input type=\"hidden\" name=\"month\" value
                    =";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "month", [], "any", false, false, false, 41), "html", null, true);
        echo ">
                    ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 42), "html", null, true);
        echo "日 <input type=\"hidden\" name=\"day\" value
                    =";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "day", [], "any", false, false, false, 43), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    郵便番号
                    ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 48), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 48), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"zip1\" value=";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 49), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"zip2\" value=";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 50), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    住所
                    ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 55), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"address\" value=";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 56), "html", null, true);
        echo ">
                    </div>

                    <div class=\"form-group\">
                    電話番号
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 61), "html", null, true);
        echo "
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 62), "html", null, true);
        echo "
                    ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 63), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"tel1\" value=";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel1", [], "any", false, false, false, 64), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"tel2\" value=";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel2", [], "any", false, false, false, 65), "html", null, true);
        echo ">
                    <input type=\"hidden\" name=\"tel3\" value=";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "tel3", [], "any", false, false, false, 66), "html", null, true);
        echo ">
                    </div>

                    
                    <div class=\"form-group\">
                    備考
                    ";
        // line 72
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 72), "html", null, true));
        echo "
                    <input type=\"hidden\" name=\"contents\" value";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "contents", [], "any", false, false, false, 73), "html", null, true);
        echo ">
                    </div>
                    
                    
                    <div class=\"form-group\">
                    <p>SQUAREからのお知らせを受信しますか？</p>
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 79), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"dm\" value=";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "dm", [], "any", false, false, false, 80), "html", null, true);
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
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 96
            echo "
";
            // line 97
            if (twig_test_iterable($context["value"])) {
                // line 98
                echo "
";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 100
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
                // line 104
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
        // line 107
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
        return array (  276 => 107,  264 => 104,  251 => 100,  247 => 99,  244 => 98,  242 => 97,  239 => 96,  235 => 95,  217 => 80,  213 => 79,  204 => 73,  200 => 72,  191 => 66,  187 => 65,  183 => 64,  179 => 63,  175 => 62,  171 => 61,  163 => 56,  159 => 55,  151 => 50,  147 => 49,  141 => 48,  133 => 43,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  105 => 33,  101 => 32,  95 => 31,  87 => 26,  83 => 25,  77 => 24,  69 => 19,  65 => 18,  57 => 13,  53 => 12,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm.html.twig", "/var/www/html/EC_shop/templates/create_account/confirm.html.twig");
    }
}
