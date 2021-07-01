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
        $this->loadTemplate("common/header.html.twig", "/shopping/pay.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"breadcrumbs\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php\">TOP</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"cart.php\">カート</a>
\t\t\t</li>
\t\t\t<li>ご購入者情報</li>
\t\t</ul>
\t</div>
\t";
        // line 15
        echo "\t<div class=\"container-flluid\">
\t\t<div class=\"wrapper-title\">
\t\t\t<h3>ご購入者情報</h3>
\t\t\t<form class=\"pay-form\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "pay_card.php\" method=\"POST\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<p class=\"form-title\">お名前 *</p>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t姓<input class=\"border-4 border-info\"  type=\"text\" name=\"family_name\" required value=";
        // line 23
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t名<input class=\"border-4 border-info\"  type=\"text\" name=\"first_name\" required value=";
        // line 24
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<p class=\"form-title\">メールアドレス *</p>
\t\t\t\t\t\t\t<input class=\"border-4 border-info\"  type=\"email\" name=\"mail\" required value=";
        // line 28
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t電話番号 *
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display:inline-flex\">
\t\t\t\t\t\t\t\t<input class=\"border-4 border-info\"  type=\"text\" name=\"tel1\" size=\"6\" maxlength=\"6\" required value=";
        // line 33
        echo twig_escape_filter($this->env, ($context["tel1"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t-<input class=\"border-4 border-info\"  type=\"text\" name=\"tel2\" size=\"6\" maxlength=\"6\" required value=";
        // line 34
        echo twig_escape_filter($this->env, ($context["tel2"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t-<input class=\"border-4 border-info\"  type=\"text\" name=\"tel3\" size=\"6\" maxlength=\"6\" required value=";
        // line 35
        echo twig_escape_filter($this->env, ($context["tel3"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t\t";
        // line 37
        if ((($context["login"] ?? null) == true)) {
            // line 38
            echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\tお届け先 *
\t\t\t\t\t\t\t\t\t<label>〒</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display:inline-flex\">
\t\t\t\t\t\t\t\t\t\t<input class=\"border-4 border-info\"  type=\"text\" name=\"zip1\" required value=";
            // line 43
            echo twig_escape_filter($this->env, ($context["zip1"] ?? null), "html", null, true);
            echo ">-
\t\t\t\t\t\t\t\t\t\t<input class=\"border-4 border-info\"  type=\"text\" name=\"zip2\" required value=";
            // line 44
            echo twig_escape_filter($this->env, ($context["zip2"] ?? null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t郵便番号<span class=\"error\">*</span>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-0\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"border-4 border-info\"  type=\"text\" name=\"zip1\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip1", [], "any", false, false, false, 51), "html", null, true);
            echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\tー
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-0\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"border-4 border-info\" type=\"text\" name=\"zip2\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "zip2", [], "any", false, false, false, 55), "html", null, true);
            echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-submit btn-gray\" name=\"address_search\" id=\"address_search\">〒から住所を入力</button>

\t\t\t\t\t\t\t\t\t";
        }
        // line 61
        echo "
\t\t\t\t\t\t\t\t\t<label>住所</label>
\t\t\t\t\t\t\t\t\t";
        // line 63
        if ((($context["login"] ?? null) == true)) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"border-4 border-info\"  type=\"text\" name=\"address\" required value=";
            echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"address\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataArr"] ?? null), "address", [], "any", false, false, false, 66), "html", null, true);
            echo "\" id=\"address\" size=\"40\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-blue\">決済情報を入力する</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div></main>";
        // line 78
        $this->loadTemplate("common/footer.html.twig", "/shopping/pay.html.twig", 78)->display($context);
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
        return array (  175 => 78,  163 => 68,  157 => 66,  151 => 64,  149 => 63,  145 => 61,  138 => 57,  133 => 55,  126 => 51,  121 => 48,  114 => 44,  110 => 43,  103 => 38,  101 => 37,  96 => 35,  92 => 34,  88 => 33,  80 => 28,  73 => 24,  69 => 23,  61 => 18,  56 => 15,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/pay.html.twig", "/var/www/html/EC_shop/templates/shopping/pay.html.twig");
    }
}
