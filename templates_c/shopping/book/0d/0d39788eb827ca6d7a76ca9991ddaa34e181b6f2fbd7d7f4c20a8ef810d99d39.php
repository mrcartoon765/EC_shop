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
            echo "\t\t\t";
            // line 13
            echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"for_count0\" value=";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"product_id";
            // line 14
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\" value=
\t\t\t\t\t\t\t\t\t\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"table";
            // line 16
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\" value=
\t\t\t\t\t\t\t\t\t\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "table_name", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"card-group col-6 col-md-4 px-0\" style=\"width: 18rem;\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<form action=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">

\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "shopping/book/detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<h5>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<h5 class=\"red\">価格 ￥";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 29)), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 30), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 32), 0, 40), "html", null, true);
            echo "...
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ctg_id\" value=";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["ctg_id"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t<small class=\"text\">
\t\t\t\t\t\t\t\t\t";
            // line 39
            if ((($context["login"] ?? null) == true)) {
                // line 40
                echo "
\t\t\t\t\t\t\t\t\t\t<section class=\"post\" data-want=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" data-table=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "table_name", [], "any", false, false, false, 41), "html", null, true);
                echo "\" data-no=\"";
                echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-want\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn_want_status";
                // line 43
                echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"active\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t\t\t\t<i></i>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t<h5><div id=\"hosii_sum";
            // line 54
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-success\" data-cal=\"1\" data-target=\".counter";
            // line 60
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-2\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"count\" data-max=\"100\" data-min=\"0\" step=\"1\" placeholder=\"数量を入力\" class=\"counter";
            // line 63
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col px-2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-success\" data-cal=\"-1\" data-target=\".counter";
            // line 66
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
            // line 85
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 86
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t</div>
\t</div>
\t<input type=\"hidden\" id=\"for_count_end\" value=";
        // line 89
        echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
        echo ">
</div></main>";
        // line 90
        $this->loadTemplate("common/footer.html.twig", "/shopping/book/Booklist.html.twig", 90)->display($context);
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
        return array (  222 => 90,  218 => 89,  214 => 87,  208 => 86,  206 => 85,  184 => 66,  178 => 63,  172 => 60,  163 => 54,  159 => 52,  156 => 51,  145 => 43,  136 => 41,  133 => 40,  131 => 39,  122 => 33,  118 => 32,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  93 => 23,  87 => 22,  82 => 20,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/book/Booklist.html.twig", "/var/www/html/EC_shop/templates/shopping/book/Booklist.html.twig");
    }
}
