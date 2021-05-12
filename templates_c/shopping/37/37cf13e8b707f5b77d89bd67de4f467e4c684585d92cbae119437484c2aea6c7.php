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

/* /shopping/pay.html.twig */
class __TwigTemplate_e9f286ec4cd4e7cc25948eb00b02149a5e71a7cade2d33b9fda47f976a0c4b1d extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/pay.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php\">TOP</a></li>
                    <li><a href=\"cart.php\">カート</a></li>
                    <li>ご購入者情報</li>
                </ul>
            </div>
        </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>ご購入者情報</h3>
   <form class=\"pay-form\"  action=\"../../shopping/pay_card.php\" method=\"POST\">
       <div class=\"form-group\">
           <p class=\"form-title\">お名前 *</p>
           <div class=\"form-group\">
           姓<input type=\"text\" name=\"family_name\" required value=";
        // line 20
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo ">
           名<input type=\"text\" name=\"first_name\" required value=";
        // line 21
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo ">
       </div>
       <div class=\"form-group\">
           <p class=\"form-title\">メールアドレス *</p>
           <input type=\"email\" name=\"mail\" required value=";
        // line 25
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo ">
       </div>
       <div class=\"form-group\">
           電話番号 *
           <div class=\"form-group\" style=\"display:inline-flex\">
           <input type=\"text\" name=\"tel1\" size=\"6\" maxlength=\"6\" required>
           -<input type=\"text\" name=\"tel2\" size=\"6\" maxlength=\"6\" required>
           -<input type=\"text\" name=\"tel3\" size=\"6\" maxlength=\"6\" required>
       </div>
       <div class=\"form-group\">
           お届け先 *
           <label>〒</label>
           <div class=\"form-group\" style=\"display:inline-flex\">
           <input type=\"text\" name=\"zip1\" required>-
           <input type=\"text\" name=\"zip2\" required>
           </div>
           <label><br>住所</label><br>
           <input type=\"text\" name=\"address\" required value=";
        // line 42
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo ">
       </div>
       <button type=\"submit\" class=\"btn btn-blue\">決済情報を入力する</button>
   </form>
                    </div>
            </div>
        </div>
    </main>
 ";
        // line 50
        $this->loadTemplate("common/footer.html.twig", "/shopping/pay.html.twig", 50)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/pay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  94 => 42,  74 => 25,  67 => 21,  63 => 20,  46 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/pay.html.twig", "/var/www/html/EC_shop/templates/shopping/pay.html.twig");
    }
}
