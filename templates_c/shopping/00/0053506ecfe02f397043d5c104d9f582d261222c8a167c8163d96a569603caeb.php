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

/* /shopping/cart.html.twig */
class __TwigTemplate_ec21c8e3d184ad113450d37d7eb8c31f9cadddd77c0170d324495731feaa6132 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/cart.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php\">TOP</a>
\t\t\t\t</li>
\t\t\t\t<li>カート</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>MY CART</h3>
\t\t\t\t<p>カート</p>
\t\t\t</div>
\t\t\t<div class=\"cartlist\">
\t\t\t\t<table class=\"cart-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>商品名</th>
\t\t\t\t\t\t\t<th>価格</th>
\t\t\t\t\t\t\t<th>個数</th>
\t\t\t\t\t\t\t<th>小計</th>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 32
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td label=\"商品名:\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td label=\"価格:\" class=\"text-right\">￥";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td label=\"個数:\" class=\"text-right\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td label=\"小計:\" class=\"text-right\">￥";
            // line 36
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 36)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<form action=\"../../shopping/cart.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name='delete_name' value=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 39), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">削除</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t<tr class=\"total\">
\t\t\t\t\t\t\t<th colspan=\"3\">合計</th>
\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t<p>￥";
        // line 48
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 49
        if ((($context["login"] ?? null) == true)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t<span style='color:red'>会員特別価格(30%OFF)</span>
\t\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"cart-btn\">

\t\t\t\t\t";
        // line 58
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 59
            echo "\t\t\t\t\t\t";
            if ((($context["login"] ?? null) == true)) {
                // line 60
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='pay.php'\">購入手続きへ</button>
\t\t\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
                echo "create_account/Login.php'\">ログインして購入手続きへ</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 63
                echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
                echo "shopping/pay.php'\">ログインせずに購入手続きへ</button>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t";
        }
        // line 66
        echo "
\t\t\t\t\t<button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        // line 67
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/Booklist.php'\">お買い物を続ける</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t";
        // line 72
        $this->loadTemplate("common/footer.html.twig", "/shopping/cart.html.twig", 72)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 72,  158 => 67,  155 => 66,  152 => 65,  147 => 63,  142 => 62,  138 => 60,  135 => 59,  133 => 58,  125 => 52,  121 => 50,  119 => 49,  115 => 48,  110 => 45,  98 => 39,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  77 => 32,  73 => 31,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/cart.html.twig", "/var/www/html/EC_shop/templates/shopping/cart.html.twig");
    }
}
