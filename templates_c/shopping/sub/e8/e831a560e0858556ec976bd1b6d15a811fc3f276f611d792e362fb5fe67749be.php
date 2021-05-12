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

/* /shopping/sub/sublist_all.html.twig */
class __TwigTemplate_bcc71d35b18d571e97537333a3d7a7651593d7cafa745e76fb68ee23c11eeaba extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/sub/sublist_all.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"wrapper last-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>Health Products</h3>
\t\t\t\t<p>関連商品一覧</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"itemlist\">
\t\t\t<ul>
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<form action=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\" class=\"item-form\">

<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["this_dir"] ?? null), "html", null, true);
            echo "detail.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["IMAGE_DIR"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"item-body text-center\">
\t\t\t\t\t\t\t\t<h5>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<p>価格　￥";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 24), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<p>";
            // line 25
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 25), 0, 40), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t\t\t<div class=\"item-form\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"count\" maxlength=\"1000\" step=\"1\" placeholder=\"数値を入力\" style=\"width:150px;\">
\t\t\t\t\t\t\t\t\t";
            // line 28
            if ((($context["login"] ?? null) == true)) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t<section class=\"post\" data-wantName=\"";
                echo twig_escape_filter($this->env, ($context["want_name"] ?? null), "html", null, true);
                echo "\">
    <div class=\"btn-want ";
                // line 30
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
        <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
        <i class=\"fa-heart fa-lg px-16 ";
                // line 32
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i><span></span>
    </div>
</section>
";
            } else {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn \tbtn-primary\">カートに入れる</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</ul>
\t\t\t<ul class=\"paging\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "sublist_all.php?title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">« 最初</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 49
        if ((($context["prev"] ?? null) != "")) {
            // line 50
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 51
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
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\t<li>
\t\t\t\t\t<span>";
        // line 56
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t</li>

\t\t\t\t";
        // line 59
        if ((($context["next"] ?? null) != "")) {
            // line 60
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "sublist_all.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 64
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/sublist_all.php?page=";
        echo twig_escape_filter($this->env, ($context["pages"] ?? null), "html", null, true);
        echo "&title=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">最後 »</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</main>
";
        // line 72
        $this->loadTemplate("common/footer.html.twig", "/shopping/sub/sublist_all.html.twig", 72)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/sub/sublist_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 72,  196 => 66,  192 => 64,  180 => 61,  177 => 60,  175 => 59,  169 => 56,  165 => 54,  151 => 51,  148 => 50,  146 => 49,  138 => 46,  133 => 43,  122 => 37,  119 => 36,  112 => 32,  107 => 30,  102 => 29,  100 => 28,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  71 => 18,  64 => 17,  59 => 15,  56 => 14,  52 => 13,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/sublist_all.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/sublist_all.html.twig");
    }
}
