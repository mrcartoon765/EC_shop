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
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "index.php\">TOP</a>
\t\t\t</li>
\t\t\t<li>カート</li>
\t\t</ul>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"wrapper-title\">
\t\t\t<h3>MY CART</h3>
\t\t\t<p>カート</p>
\t\t</div>
\t\t<div class=\"table\">
\t\t\t<table class=\"cart-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center\">商品名</th>
\t\t\t\t\t\t<th class=\"text-center\">価格</th>
\t\t\t\t\t\t<th class=\"text-center\">個数</th>
\t\t\t\t\t\t<th class=\"text-center\">小計</th>
\t\t\t\t\t\t<th class=\"text-center\">数量変更・削除</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 28
        $context["a"] = 0;
        // line 29
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 30
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td label=\"商品名:\" class=\"text-right h5\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 31);
            echo "</td>
\t\t\t\t\t\t\t<td label=\"価格:\" class=\"text-right h5\">￥";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 32)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td label=\"個数:\" class=\"text-right h5\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 34
            $context["small_sum"] = (twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 34) * twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 34));
            // line 35
            echo "\t\t\t\t\t\t\t<td label=\"小計:\" class=\"text-right h5\">￥";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["small_sum"] ?? null)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class='row px-1'>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-primary\" data-cal=\"1\" data-target=\".counter";
            // line 41
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"product_count\" value=";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 44), "html", null, true);
            echo " class=\"counter";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo " text-center\" data-max=\"500\" data-min=\"1\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-primary\" data-cal=\"-1\" data-target=\".counter";
            // line 48
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_title\" value=\"";
            // line 51
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_title"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_id\" value=";
            // line 52
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo ">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">変更する</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<form action=\"../../shopping/cart.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name='delete_name' value=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 59);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">削除</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 68
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 69
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t</tbody>
\t\t\t\t<tr class=\"total\">
\t\t\t\t\t<th class=\"text-center\" colspan=\"3\">合計</th>
\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t<p class=\"h3\">￥";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 75
        if ((($context["login"] ?? null) == true)) {
            // line 76
            echo "\t\t";
            if ( !twig_test_empty(($context["product_cart"] ?? null))) {
                // line 77
                echo "\t\t\t\t\t\t\t<span style='color:red'>会員特別価格(30%OFF)</span>
\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t<div class=\"cart-btn\">
\t\t";
        // line 85
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 86
            echo "\t\t\t";
            if ((($context["login"] ?? null) == true)) {
                // line 87
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='pay.php'\">購入手続きへ</button>
\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t<form action=\"";
                echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
                echo "create_account/login.php\" method=\"POST\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 90
                echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
                echo "create_account/login.php'\" name=\"login_pay\" value=\"1\" method=\"POST\">ログインして購入手続きへ</button>
\t\t\t\t</form>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 92
                echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
                echo "shopping/pay.php'\">ログインせずに購入手続きへ</button>
\t\t\t";
            }
            // line 94
            echo "\t\t";
        }
        // line 95
        echo "\t\t<button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/shopping/book/Booklist.php'\">お買い物を続ける</button>
\t\t\t\t";
        // line 96
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 97
            echo "\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "shopping/cart.php\" method=\"POST\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\" onclick=\"location.href='";
            // line 98
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "shopping/cart.php'\" name=\"cart_null\" value=\"1\" method=\"POST\">カートの中身を空にする</button>
\t\t\t\t</form>
\t\t\t";
        } else {
            // line 101
            echo "\t\t\t";
        }
        // line 102
        echo "\t</div>
\t</div><br><br>
</main>
";
        // line 105
        $this->loadTemplate("common/footer.html.twig", "/shopping/cart.html.twig", 105)->display($context);
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
        return array (  244 => 105,  239 => 102,  236 => 101,  230 => 98,  225 => 97,  223 => 96,  218 => 95,  215 => 94,  210 => 92,  205 => 90,  200 => 89,  196 => 87,  193 => 86,  191 => 85,  184 => 80,  181 => 79,  177 => 77,  174 => 76,  172 => 75,  168 => 74,  162 => 70,  156 => 69,  154 => 68,  142 => 59,  132 => 52,  128 => 51,  122 => 48,  113 => 44,  107 => 41,  103 => 40,  94 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  77 => 30,  72 => 29,  70 => 28,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/cart.html.twig", "/var/www/html/EC_shop/templates/shopping/cart.html.twig");
    }
}
