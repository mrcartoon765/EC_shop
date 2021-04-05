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

/* pay_conf.html.twig */
class __TwigTemplate_1730cf274631d9d2c51357c1e5c4f6ea4702ecf55f505ca2d3a9b1b5bc61ad45 extends \Twig\Template
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
        echo " <main>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <ul>
                <li><a href=\"../../index.php\">TOP</a></li>
                <li><a href=\"../../shopping/Booklist.php\">書籍一覧</a></li>
                <li><a href=\"../../shopping/cart.php\">カート</a></li>
+               <li><a href=\"../../shopping/pay.php\">ご購入者情報</a></li>
+               <li><a href=\"../../shopping/pay_card.php\">クレジットカード情報</a></li>
+               <li>ご購入者情報確認</li>
                </ul>
            </div>
        </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>ご購入者情報</h3>
   <form class=\"pay-form\"  action=\"../../shopping/pay_end.php\" method=\"POST\">
   <input type=\"hidden\" name=\"payjp_token\" value=";
        // line 19
        echo twig_escape_filter($this->env, ($context["payjp_token"] ?? null), "html", null, true);
        echo ">
       <div class=\"form-group\">
           <p class=\"form-title\">お名前 *</p>
           ";
        // line 22
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"family_name\" value=";
        // line 23
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"first_name\" value=";
        // line 24
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo " >
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">mail *</p>
           ";
        // line 28
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"mail\" value=";
        // line 29
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo " >
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">電話番号 *</p>
           ";
        // line 33
        echo twig_escape_filter($this->env, ($context["tel1"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["tel2"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["tel3"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"tel1\" value=";
        // line 34
        echo twig_escape_filter($this->env, ($context["tel1"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"tel2\" value=";
        // line 35
        echo twig_escape_filter($this->env, ($context["tel2"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"tel3\" value=";
        // line 36
        echo twig_escape_filter($this->env, ($context["tel3"] ?? null), "html", null, true);
        echo " >
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">お届け先 *</p>
           <label>郵便番号</label><br>
           ";
        // line 41
        echo twig_escape_filter($this->env, ($context["zip1"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["zip2"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"zip1\" value=";
        // line 42
        echo twig_escape_filter($this->env, ($context["zip1"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"zip2\" value=";
        // line 43
        echo twig_escape_filter($this->env, ($context["zip2"] ?? null), "html", null, true);
        echo " >
           <br><label>住所</label><br>
           ";
        // line 45
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"address\" value=";
        // line 46
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo " >
       </div>
       <p>この内容で送信してよろしいですか？</p>
       <button type=\"submit\" class=\"btn btn-blue\">購入する</button>
       <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='../../shopping/pay.php'\">修正する</button>
   </form>
                    </div>
            </div>
        </div>
    </main>";
    }

    public function getTemplateName()
    {
        return "pay_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  130 => 45,  125 => 43,  121 => 42,  115 => 41,  107 => 36,  103 => 35,  99 => 34,  91 => 33,  84 => 29,  80 => 28,  73 => 24,  69 => 23,  63 => 22,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pay_conf.html.twig", "/var/www/html/EC_shop/templates/shopping/pay_conf.html.twig");
    }
}
