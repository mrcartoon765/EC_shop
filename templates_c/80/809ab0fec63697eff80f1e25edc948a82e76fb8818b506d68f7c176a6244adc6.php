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

/* common/header_eye.html.twig */
class __TwigTemplate_786736784cc0f96530fa722aa1e2bf560f5846441a4e79509ad81bc542a31b68 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ja\">
\t<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#\"></head>
\t<link rel=\"canonical\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
        echo "\">
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"theme-color\" content=\"#DD8669\"/>
\t<meta name=\"description\" content=\"EC_SHOP\">
\t<title>ガボールパッチトレーニング</title>

\t<meta property\"og:title\" content=\"EC_BOOK, inc.\"/>
\t<meta property\"og:type\" content=\"website\"/>
\t<meta property\"og:image\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/logo.png\"/>
\t<link rel=\"apple-touch-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/logo.png\">
\t<meta property\"og:url\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"/>
\t<meta property\"og:description\" content=\"視力回復トレーニングです\"/>


\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>

\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "responsive.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "styles.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "admin/styles.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/bootstrap.min.css\">
\t<link
\trel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "css-buttons-master/styles/buttons.css\">

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t<link href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" rel=\"stylesheet\">

\t<link rel=\"manifest\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "manifest.json\">
\t<nav class=\"navbar navbar-expand-xl navbar-dark bg-dark\">
\t\t<a class=\"navbar-brand mx-auto\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "/image/square_logo-1024x192.webp\" id=\"logo\" style=\"width:200px;\" alt=\"logo_image\"></a>
\t\t<h4 class=\"navbar-brand mx-auto\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "\">眼精疲労軽減ゲーム</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div id=\"img_search\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div id=\"description\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col\">
\t\t\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t\t<p id=\"score\"></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<p>探す個数
\t\t\t\t\t\t\t<select class=\"count\" name=\"count\">
\t\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t<option hidden>0</option>
\t\t\t\t\t\t\t\t\t<option value=";
            // line 57
            echo twig_escape_filter($this->env, ($context["a"] + 1), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, ($context["a"] + 1), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t\t\t</select>個増やす</p>
\t\t\t\t\t\t<p id=\"only\" style=\"display:none\"></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
</html></body></html>
";
    }

    public function getTemplateName()
    {
        return "common/header_eye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  139 => 57,  136 => 56,  132 => 55,  125 => 50,  110 => 37,  104 => 36,  99 => 34,  90 => 28,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  63 => 16,  59 => 15,  55 => 14,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header_eye.html.twig", "/var/www/html/EC_shop/templates/common/header_eye.html.twig");
    }
}
