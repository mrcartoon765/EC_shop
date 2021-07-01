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

/* /shopping/pay_conf.html.twig */
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
        echo " ";
        $this->loadTemplate("common/header.html.twig", "/shopping/pay_conf.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"breadcrumbs\">
                <ul>
                <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php\">TOP</a></li>
                <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/cart.php\">カート</a></li>
+               <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/pay.php\">ご購入者情報</a></li>
+               <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/pay_card.php\">決済カード情報</a></li>
+               <li>ご購入者情報確認</li>
                </ul>
        </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>ご購入者情報</h3>
   <form class=\"pay-form\"  action=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/pay_end.php\" method=\"POST\">
   <input type=\"hidden\" name=\"payjp_token\" value=";
        // line 17
        echo twig_escape_filter($this->env, ($context["payjp_token"] ?? null), "html", null, true);
        echo ">
       <div class=\"form-group\">
           <p class=\"form-title\">お名前 *</p>
           ";
        // line 20
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"family_name\" value=";
        // line 21
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"first_name\" value=";
        // line 22
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo " >
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">mail *</p>
           ";
        // line 26
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"mail\" value=";
        // line 27
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo " >
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">電話番号 *</p>
           ";
        // line 31
        echo twig_escape_filter($this->env, ($context["tel1"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["tel2"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["tel3"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"tel1\" value=";
        // line 32
        echo twig_escape_filter($this->env, ($context["tel1"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"tel2\" value=";
        // line 33
        echo twig_escape_filter($this->env, ($context["tel2"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"tel3\" value=";
        // line 34
        echo twig_escape_filter($this->env, ($context["tel3"] ?? null), "html", null, true);
        echo " >
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">お届け先 *</p>
           <label>郵便番号</label><br>
           ";
        // line 39
        echo twig_escape_filter($this->env, ($context["zip1"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["zip2"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"zip1\" value=";
        // line 40
        echo twig_escape_filter($this->env, ($context["zip1"] ?? null), "html", null, true);
        echo " >
           <input type=\"hidden\" name=\"zip2\" value=";
        // line 41
        echo twig_escape_filter($this->env, ($context["zip2"] ?? null), "html", null, true);
        echo " >
           <br><label>住所</label><br>
           ";
        // line 43
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "
           <input type=\"hidden\" name=\"address\" value=";
        // line 44
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo " >
       </div>
       <p>この内容で送信してよろしいですか？</p>
       <button type=\"submit\" class=\"btn btn-blue\">購入する</button>
       <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        // line 48
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/pay.php'\">修正する</button>
   </form>
                    </div>
            </div>
        </div>
    </main>
 ";
        // line 54
        $this->loadTemplate("common/footer.html.twig", "/shopping/pay_conf.html.twig", 54)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/pay_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  156 => 48,  149 => 44,  145 => 43,  140 => 41,  136 => 40,  130 => 39,  122 => 34,  118 => 33,  114 => 32,  106 => 31,  99 => 27,  95 => 26,  88 => 22,  84 => 21,  78 => 20,  72 => 17,  68 => 16,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/pay_conf.html.twig", "/var/www/html/EC_shop/templates/shopping/pay_conf.html.twig");
    }
}
