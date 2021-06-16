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

/* /shopping/book/booklist.html.twig */
class __TwigTemplate_22f850c0efef66ff64067718b9af884163e65d7bee6a8a33badd9b8ed5cfa8a4 extends \Twig\Template
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
        $this->loadTemplate("common/header.html.twig", "/shopping/book/booklist.html.twig", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"container-flluid\">
\t\t<br><br><br>
\t\t<div class=\"wrapper-title\">

\t\t\t<h2>BOOKs</h2>
\t\t\t<h6>書籍一覧</h6>
\t\t</div>
\t\t";
        // line 10
        $context["a"] = 0;
        // line 11
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 13
            echo "
\t\t\t\t";
            // line 14
            $this->loadTemplate("common/shopping/hidden_input.html.twig", "/shopping/book/booklist.html.twig", 14)->display($context);
            // line 15
            echo "

\t\t\t\t<div class=\"card-group col-6 col-md-4 px-0\" style=\"width: 18rem;\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<form action=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/shopping/cart.php\" method=\"POST\">
\t\t\t\t";
            // line 20
            $this->loadTemplate("common/shopping/hidden_input_order_products.html.twig", "/shopping/book/booklist.html.twig", 20)->display($context);
            // line 21
            echo "
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
\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t<h5>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"title\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<h5 class=\"red text-center\">価格 ￥";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 34)), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"price\" value=";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"border-bottom border-info\">
\t\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 39), 0, 40), "html", null, true);
            echo "...
\t\t\t\t\t\t\t\t\t";
            // line 40
            $this->loadTemplate("common/shopping/hidden_input_cart_in.html.twig", "/shopping/book/booklist.html.twig", 40)->display($context);
            // line 41
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 44
            $this->loadTemplate("common/shopping/want_button.html.twig", "/shopping/book/booklist.html.twig", 44)->display($context);
            // line 45
            echo "
\t\t\t\t\t\t\t";
            // line 46
            $this->loadTemplate("common/cart_btn.html.twig", "/shopping/book/booklist.html.twig", 46)->display($context);
            // line 47
            echo "
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 52
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 53
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>
\t</div>
\t<br><br>
</div></main>";
        // line 57
        $this->loadTemplate("common/shopping/hidden_input_end.html.twig", "/shopping/book/booklist.html.twig", 57)->display($context);
        $this->loadTemplate("common/footer.html.twig", "/shopping/book/booklist.html.twig", 57)->display($context);
    }

    public function getTemplateName()
    {
        return "/shopping/book/booklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 57,  170 => 54,  156 => 53,  154 => 52,  147 => 47,  145 => 46,  142 => 45,  140 => 44,  135 => 41,  133 => 40,  129 => 39,  122 => 35,  118 => 34,  110 => 29,  106 => 28,  97 => 23,  91 => 22,  88 => 21,  86 => 20,  82 => 19,  76 => 15,  74 => 14,  71 => 13,  54 => 12,  51 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/book/booklist.html.twig", "/var/www/html/EC_shop/templates/shopping/book/booklist.html.twig");
    }
}
