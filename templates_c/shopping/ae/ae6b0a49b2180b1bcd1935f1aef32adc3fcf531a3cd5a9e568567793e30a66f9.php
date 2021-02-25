<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* detail.html.twig */
class __TwigTemplate_1ba37c213b8ef8bfde34c7b9ecf16437dad3cb75a43c47c5d510b5c3d13cdb19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ja\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <script src=\"https://ajax.googleapis.com/ajax/lib/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/shopping.js\" rel =\"stylesheet\"></script>
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/shopping.css\" rel =\"stylesheet\">
</head>
<body>
<input type=\"hidden\" name=\"entry_url\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "\" id=\"entry_url\">
<div id=\"wrapper\">
";
        // line 14
        $this->loadTemplate("category_menu.html.twig", "detail.html.twig", 14)->display($context);
        // line 15
        echo "<div id=\"book_detail\">
<div class=\"image\">
<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "image/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BookData"] ?? null), "image", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BookData"] ?? null), "title", []), "html", null, true);
        echo "\">
</div>
<div class=\"detail\">
<dl>
<dt>商品名</dt>
<dd>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BookData"] ?? null), "title", []), "html", null, true);
        echo "</dd>
<dt>詳細</dt>
<dd>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BookData"] ?? null), "detail", []), "html", null, true);
        echo "</dd>
<dt>価格</dt>
<dd>&yen;";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["BookData"] ?? null), "price", []), 0, ".", ","), "html", null, true);
        echo "</dd>
<input type=\"hidden\" name=\"book_id\"=\"book_id\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BookData"] ?? null), "book_id", []), "html", null, true);
        echo "\">
</dl>
</div>
<div class=\"cart_in\">
<input type=\"button\" name=\"back\" value=\"一覧へ戻る\" onclick=\"history.back(); return false;\">
<input type=\"button\" name=\"cart_in\" value=\"ショッピングカートへ入れる\" id=\"cart_in\">
</div>
</div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  82 => 26,  77 => 24,  72 => 22,  60 => 17,  56 => 15,  54 => 14,  49 => 12,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "detail.html.twig", "/Applications/MAMP/htdocs/portforio/templates/shopping/detail.html.twig");
    }
}
