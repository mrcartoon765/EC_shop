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

/* pay_card.html.twig */
class __TwigTemplate_83cb6879d609d3ffd173231e488a188528fdda2d7d971e684b5427274799bfc7 extends \Twig\Template
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
\t<div class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"../../index.php\">TOP</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"../../shopping/Booklist.php\">商品一覧</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"../../shopping/cart.php\">カート</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"../../shopping/pay.php\">ご購入者情報</a>
\t\t\t\t</li>
\t\t\t\t<li>決済カード情報</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>決済カード情報</h3>
\t\t\t\t<span class=\"error\"></span>
\t\t\t</div>
\t\t\t<form class=\"pay-form\" action=\"../../shopping/pay_conf.php\" method=\"POST\">
\t\t\t\t<input type=\"hidden\" name=\"family_name\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["family_name"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"first_name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"mail\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"tel1\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["tel1"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"tel2\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["tel2"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"tel3\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["tel3"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"zip1\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["zip1"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"zip2\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["zip2"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"address\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t  <script src=\"https://checkout.pay.jp/\" 
\t\t\t\t\ttype=\"text/javascript\"
\t\t\t\t\tclass=\"payjp-button\" 
\t\t\t\t\tdata-token-name=\"payjp_token\"
\t\t\t\t\tdata-key=\"*******\"
\t\t\t\t\tdata-text=\"カード情報の入力\"
\t\t\t\t\tdata-submit-text =\"支払い確認画面へ\"
\t\t\t\t\t>
\t\t\t\t\t</script>

\t\t\t</form>
\t\t</div>
\t</div>
</main>
<footer>
\t<div class=\"container\">
\t\t<p>Copyright @ 2021  HEALTH KNOWLEGE</p>
\t</div>
</footer>

 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "pay_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pay_card.html.twig", "/var/www/html/EC_shop/templates/shopping/pay_card.html.twig");
    }
}
