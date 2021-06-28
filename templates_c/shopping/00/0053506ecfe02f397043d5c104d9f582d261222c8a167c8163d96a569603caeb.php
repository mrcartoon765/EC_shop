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
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"cart-table table-responsive\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\"></th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">商品名</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">価格</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">個数</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">小計</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">数量変更・削除</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 29
        $context["a"] = 0;
        // line 30
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 31
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\"><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "image/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_table_name", [], "any", false, false, false, 32), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" style=\"width:10rem\"></td>
\t\t\t\t\t\t\t<td label=\"商品名:\" class=\"text-right h5\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 33);
            echo "</td>
\t\t\t\t\t\t\t<td label=\"価格:\" class=\"text-right h5\">￥";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 34)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td label=\"個数:\" class=\"text-right h5\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 36
            $context["small_sum"] = (twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 36));
            // line 37
            echo "\t\t\t\t\t\t\t<td label=\"小計:\" class=\"text-right h5\">￥";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["small_sum"] ?? null)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class='row px-1'>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-primary\" data-cal=\"1\" data-target=\".counter";
            // line 43
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"product_count\" value=";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 46), "html", null, true);
            echo " class=\"counter";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo " text-center border-4 border-info\" data-max=\"500\" data-min=\"1\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-primary\" data-cal=\"-1\" data-target=\".counter";
            // line 50
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_title\" value=\"";
            // line 53
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_title"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_id\" value=";
            // line 54
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo ">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">変更する</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name='delete_name' value=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 61);
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
            // line 70
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 71
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</tbody>
\t\t\t\t<tr class=\"total\">
\t\t\t\t\t<th class=\"text-center\" colspan=\"3\">合計</th>
\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t<p class=\"h3\">￥";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 77
        if ((($context["login"] ?? null) == true)) {
            // line 78
            echo "\t\t";
            if ( !twig_test_empty(($context["product_cart"] ?? null))) {
                // line 79
                echo "\t\t\t\t\t\t\t<span style='color:red'>会員特別価格(30%OFF)</span>
\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t<div class=\"cart-btn\">
\t\t";
        // line 87
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 88
            echo "\t\t\t";
            if ((($context["login"] ?? null) == true)) {
                // line 89
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='pay.php'\">購入手続きへ</button>
\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t<form action=\"";
                echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
                echo "login.php\" method=\"POST\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 92
                echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
                echo "login.php'\" name=\"login_pay\" value=\"1\" method=\"POST\">ログインして購入手続きへ</button>
\t\t\t\t</form>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 94
                echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
                echo "/pay.php'\">ログインせずに購入手続きへ</button>
\t\t\t";
            }
            // line 96
            echo "\t\t";
        }
        // line 97
        echo "\t\t<button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/book/booklist.php'\">お買い物を続ける</button>
\t\t\t\t";
        // line 98
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 99
            echo "\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"POST\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\" onclick=\"location.href='";
            // line 100
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "/cart.php'\" name=\"cart_null\" value=\"1\" method=\"POST\">カートの中身を空にする</button>
\t\t\t\t</form>
\t\t\t";
        } else {
            // line 103
            echo "\t\t\t";
        }
        // line 104
        echo "\t</div>
\t</div><br><br>
</main>
";
        // line 107
        $this->loadTemplate("common/footer.html.twig", "/shopping/cart.html.twig", 107)->display($context);
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
        return array (  256 => 107,  251 => 104,  248 => 103,  242 => 100,  237 => 99,  235 => 98,  230 => 97,  227 => 96,  222 => 94,  217 => 92,  212 => 91,  208 => 89,  205 => 88,  203 => 87,  196 => 82,  193 => 81,  189 => 79,  186 => 78,  184 => 77,  180 => 76,  174 => 72,  168 => 71,  166 => 70,  154 => 61,  150 => 60,  141 => 54,  137 => 53,  131 => 50,  122 => 46,  116 => 43,  112 => 42,  103 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  81 => 32,  78 => 31,  73 => 30,  71 => 29,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/cart.html.twig", "/var/www/html/EC_shop/templates/shopping/cart.html.twig");
    }
}
