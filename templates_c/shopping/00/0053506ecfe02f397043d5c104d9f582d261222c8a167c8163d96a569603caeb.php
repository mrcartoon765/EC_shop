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

/* cart.html.twig */
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
        echo " <main>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"index.php\">TOP</a></li>
                    <li>カート</li>
                </ul>
            </div>
        </div>
        <div class=\"wrapper last-wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>MY CART</h3>
                    <p>カート</p>
                </div>
                <div class=\"cartlist\">
                <table class=\"cart-table\">
                <thead>
                <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>個数</th>
                <th>小計</th>
                <th>操作</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Books_cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cart_in_Book"]) {
            // line 29
            echo "                  <tr>
                  <td label=\"商品名:\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_in_Book"], "Book_title", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                  <td label=\"価格:\" class=\"text-right\">￥";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_in_Book"], "Book_price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                  <td label=\"個数:\" class=\"text-right\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_in_Book"], "Book_count", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                  <td label=\"小計:\" class=\"text-right\">￥";
            // line 33
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["cart_in_Book"], "Book_price", [], "any", false, false, false, 33) * twig_get_attribute($this->env, $this->source, $context["cart_in_Book"], "Book_count", [], "any", false, false, false, 33)), "html", null, true);
            echo "</td>
                  <td>
                  <form action=\"../../shopping/cart.php\" method=\"post\">
                  <input type=\"hidden\" name='delete_name' value=";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_in_Book"], "Book_title", [], "any", false, false, false, 36), "html", null, true);
            echo ">
                  <button type=\"submit\" class=\"btn btn-red\">削除</button>
                  </form>
                  </td>
                  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart_in_Book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "<tr class=\"total\">
\t<th colspan=\"2\">合計</th>
\t<td colspan=\"2\">￥";
        // line 44
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
</tr>
            </tbody>
</table>
                <div class=\"cart-btn\">
                    <button type=\"button\" class=\"btn btn-blue\">購入手続きへ</button>
                    <button type=\"button\" class=\"btn btn-gray\">お買い物を続ける</button>
                </div>
            </div>
        </div>
    </main>";
    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 44,  103 => 42,  91 => 36,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  70 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart.html.twig", "/var/www/html/EC_shop/templates/shopping/cart.html.twig");
    }
}
