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

/* /shopping/sub/sublist_ctg1_1.html.twig */
class __TwigTemplate_5a8180812c37cadc65eb64e38ad0a339fb13efb44c2e8fe4ad2396a78776a21c extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/sub/sublist_ctg1_1.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"container-fluid\">
\t\t<br><br><br>
\t\t<div class=\"wrapper-title\">
\t\t\t<h2>Health Products</h2>
\t\t\t<h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["ctg_title"] ?? null), "html", null, true);
        echo "一覧</h3>
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
            echo "\t\t\t\t<div class=\"card-group col-6 col-md-4 px-0\" style=\"width: 100%;\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<form action=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/sub/detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<h5>";
            // line 20
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 20), 0, 30), "html", null, true);
            echo "...</h5>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<h7>価格 ￥";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo "</h7>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 23), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 25), 0, 40), "html", null, true);
            echo "...
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ctg_id\" value=";
            // line 26
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["ctg_id"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t<small class=\"text\">
\t\t\t\t\t\t\t\t\t";
            // line 32
            if ((($context["login"] ?? null) == true)) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t<section class=\"post\" data-wantname=\"";
                echo twig_escape_filter($this->env, ($context["want_name"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-want ";
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
            echo "\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"count\" data-max=\"100\" data-min=\"0\" step=\"1\" placeholder=\"数値を入力\" class=\"counter";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-success\" data-cal=\"1\" data-target=\".counter";
            // line 47
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-success\" data-cal=\"-1\" data-target=\".counter";
            // line 50
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
            // line 69
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 70
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t</div>
\t</div>
</div>

<ul class=\"paging\">
\t<li>
\t\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "sublist_all.php?title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">« 最初</a>
\t</li>

\t";
        // line 80
        if ((($context["prev"] ?? null) != "")) {
            // line 81
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "sublist_all.php?page=";
            echo twig_escape_filter($this->env, ($context["prev"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo " -1=\"-1\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        // line 85
        echo "
\t<li>
\t\t<span>";
        // line 87
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span>
\t</li>

\t";
        // line 90
        if ((($context["next"] ?? null) != "")) {
            // line 91
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "sublist_all.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        // line 95
        echo "
\t<li>
\t\t<a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/sublist_all.php?page=";
        echo twig_escape_filter($this->env, ($context["pages"] ?? null), "html", null, true);
        echo "&title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">最後 »</a>
\t</li>
</ul></main>";
        // line 99
        $this->loadTemplate("common/footer.html.twig", "/shopping/sub/sublist_ctg1_1.html.twig", 99)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/sub/sublist_ctg1_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 99,  246 => 97,  242 => 95,  230 => 92,  227 => 91,  225 => 90,  219 => 87,  215 => 85,  201 => 82,  198 => 81,  196 => 80,  188 => 77,  180 => 71,  174 => 70,  172 => 69,  150 => 50,  144 => 47,  136 => 43,  133 => 42,  125 => 37,  120 => 35,  114 => 33,  112 => 32,  103 => 26,  99 => 25,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  74 => 16,  68 => 15,  64 => 14,  60 => 12,  56 => 11,  53 => 10,  51 => 9,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/sublist_ctg1_1.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/sublist_ctg1_1.html.twig");
    }
}
