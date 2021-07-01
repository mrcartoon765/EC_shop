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
\t\t\t<table class=\"cart-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\"></th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">商品名</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">価格</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">個数</th>
\t\t\t\t\t\t<th class=\"text-center text-nowrap\">小計</th>
\t\t\t\t\t\t";
        // line 25
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 26
            echo "\t\t\t\t\t\t<th class=\"text-center text-nowrap\">数量変更・削除</th>
\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 31
        $context["a"] = 0;
        // line 32
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 33
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_table_name", [], "any", false, false, false, 35), "html", null, true);
            echo "/detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "image/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_table_name", [], "any", false, false, false, 36), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" style=\"width:10rem\">
\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td label=\"商品名:\" class=\"text-right h5\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 39);
            echo "</td>
\t\t\t\t\t\t\t<td label=\"価格:\" class=\"text-right h5\">￥";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td label=\"個数:\" class=\"text-right h5\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 42
            $context["small_sum"] = (twig_get_attribute($this->env, $this->source, $context["value"], "product_price", [], "any", false, false, false, 42) * twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 42));
            // line 43
            echo "\t\t\t\t\t\t\t<td label=\"小計:\" class=\"text-right h5\">￥";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["small_sum"] ?? null)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class='row px-1'>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-primary\" data-cal=\"1\" data-target=\".counter";
            // line 49
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"product_count\" value=";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_count", [], "any", false, false, false, 52), "html", null, true);
            echo " class=\"counter";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo " text-center border-4 border-info\" data-max=\"500\" data-min=\"1\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-primary\" data-cal=\"-1\" data-target=\".counter";
            // line 56
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_title\" value=\"";
            // line 59
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_title"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_id\" value=";
            // line 60
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo ">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col px-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">変更する</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name='delete_name' value=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 67);
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
            // line 76
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 77
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t</tbody>
\t\t\t\t<tr class=\"total\">
\t\t\t\t\t<th class=\"text-center\" colspan=\"3\">合計</th>
\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t<p class=\"h3\">￥";
        // line 82
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 83
        if ((($context["login"] ?? null) == true)) {
            // line 84
            echo "\t\t";
            if ( !twig_test_empty(($context["product_cart"] ?? null))) {
                // line 85
                echo "\t\t\t\t\t\t\t<span style='color:red'>会員特別価格(30%OFF)</span>
\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t<div class=\"cart-btn\">
\t\t";
        // line 93
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 94
            echo "\t\t\t";
            if ((($context["login"] ?? null) == true)) {
                // line 95
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='pay.php'\">購入手続きへ</button>
\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t<form action=\"";
                echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
                echo "login.php\" method=\"POST\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 98
                echo twig_escape_filter($this->env, ($context["create_ac"] ?? null), "html", null, true);
                echo "login.php'\" name=\"login_pay\" value=\"1\" method=\"POST\">ログインして購入手続きへ</button>
\t\t\t\t</form>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='";
                // line 100
                echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
                echo "/pay.php'\">ログインせずに購入手続きへ</button>
\t\t\t";
            }
            // line 102
            echo "\t\t";
        }
        // line 103
        echo "\t\t<button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "/book/booklist.php'\">お買い物を続ける</button>
\t\t\t\t";
        // line 104
        if ( !twig_test_empty(($context["product_cart"] ?? null))) {
            // line 105
            echo "\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "cart.php\" method=\"POST\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\" onclick=\"location.href='";
            // line 106
            echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
            echo "/cart.php'\" name=\"cart_null\" value=\"1\" method=\"POST\">カートの中身を空にする</button>
\t\t\t\t</form>
\t\t\t";
        } else {
            // line 109
            echo "\t\t\t";
        }
        // line 110
        echo "\t</div>
\t</div><br><br>
</main>
";
        // line 113
        $this->loadTemplate("common/footer.html.twig", "/shopping/cart.html.twig", 113)->display($context);
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
        return array (  273 => 113,  268 => 110,  265 => 109,  259 => 106,  254 => 105,  252 => 104,  247 => 103,  244 => 102,  239 => 100,  234 => 98,  229 => 97,  225 => 95,  222 => 94,  220 => 93,  213 => 88,  210 => 87,  206 => 85,  203 => 84,  201 => 83,  197 => 82,  191 => 78,  185 => 77,  183 => 76,  171 => 67,  167 => 66,  158 => 60,  154 => 59,  148 => 56,  139 => 52,  133 => 49,  129 => 48,  120 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  96 => 36,  89 => 35,  85 => 33,  80 => 32,  78 => 31,  73 => 28,  69 => 26,  67 => 25,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/cart.html.twig", "/var/www/html/EC_shop/templates/shopping/cart.html.twig");
    }
}
