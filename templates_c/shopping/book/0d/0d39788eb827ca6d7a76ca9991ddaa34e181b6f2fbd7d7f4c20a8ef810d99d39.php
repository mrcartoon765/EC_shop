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

/* /shopping/book/Booklist.html.twig */
class __TwigTemplate_d7f5d8cde65e7bca8b80dc3b257df6ac474e4524336c16b44f55a2f7caf9666a extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/book/Booklist.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"container-flluid\">
\t\t<br><br><br>
\t\t<div class=\"wrapper-title\">
\t\t\t<h2>BOOKs</h2>
\t\t\t<h6>書籍一覧</h6>
\t\t</div>
\t\t";
        // line 9
        $context["a"] = 0;
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "\t\t\t\t<div class=\"card-group col-6 col-md-4 px-0\" style=\"width: 18rem;\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<form action=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">

\t\t\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "shopping/book/detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<h5>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<h5 class=\"red\">価格 ￥";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 23)), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 24), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 26), 0, 40), "html", null, true);
            echo "...
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ctg_id\" value=";
            // line 27
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["ctg_id"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t<small class=\"text\">
\t\t\t\t\t\t\t\t\t";
            // line 33
            if ((($context["login"] ?? null) == true)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t<section class=\"post\" data-wantname=\"";
                echo twig_escape_filter($this->env, ($context["want_name"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-want";
                // line 35
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-heart fa-2x px-16 ";
                // line 37
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-success\" data-cal=\"1\" data-target=\".counter";
            // line 46
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-2\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"count\" data-max=\"100\" data-min=\"0\" step=\"1\" placeholder=\"数量を入力\" class=\"counter";
            // line 49
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-success\" data-cal=\"-1\" data-target=\".counter";
            // line 52
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-success\">カートに入れる</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-block d-sm-none\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link\">
\t\t\t\t\t\t\t\t\t\t\t<i type=\"submit\" class=\"fas fa-shopping-cart fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cart_in_status\" value=1>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 71
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 72
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t</div>
\t</div>
</div></main>";
        // line 75
        $this->loadTemplate("common/footer.html.twig", "/shopping/book/Booklist.html.twig", 75)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/book/Booklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 75,  180 => 73,  174 => 72,  172 => 71,  150 => 52,  144 => 49,  138 => 46,  133 => 43,  130 => 42,  122 => 37,  117 => 35,  112 => 34,  110 => 33,  101 => 27,  97 => 26,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  72 => 17,  66 => 16,  61 => 14,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/book/Booklist.html.twig", "/var/www/html/EC_shop/templates/shopping/book/Booklist.html.twig");
    }
}
