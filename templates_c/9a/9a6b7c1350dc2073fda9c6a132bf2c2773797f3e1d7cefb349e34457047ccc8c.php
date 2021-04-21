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

/* index.html.twig */
class __TwigTemplate_e96b898f559602de8551dd26f7b7b48b09521038884d97452bbbf4dc675e3ac1 extends \Twig\Template
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
        $this->loadTemplate("./common/header.html.twig", "index.html.twig", 1)->display($context);
        // line 2
        echo "
<body>
\t<main>
\t\t<div class=\"top-img\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"top-text\">
\t\t\t\t\t<h2>Bringing Health Knowledge</h2>
\t\t\t\t\t<h2>to you.</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"wrapper\" id=\"news\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wrapper-title\">
\t\t\t\t\t<h3>NEWS</h3>
\t\t\t\t\t<p>お知らせ</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-list\">
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 22
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
            echo "page.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "updated_at", [], "any", false, false, false, 23), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"wrapper\" id=\"service\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wrapper-title\">
\t\t\t\t\t<h3>SERVICE</h3>
\t\t\t\t\t<p>サービス</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"boxs\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<img src=\"/image/serviceimg-1.jpg\">
\t\t\t\t\t\t<h4 class=\"service-title\">ITコンサルティング</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<img src=\"/image/serviceimg-2.jpg\">
\t\t\t\t\t\t<h4 class=\"service-title\">ソフトウェア開発</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<img src=\"/image/serviceimg-3.jpg\">
\t\t\t\t\t\t<h4 class=\"service-title\">WEBデザイン</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<img src=\"/image/serviceimg-4.jpg\">
\t\t\t\t\t\t<h4 class=\"service-title\">動画制作</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"wrapper\" id=\"about\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wrapper-title\">
\t\t\t\t\t<h3>ABOUT US</h3>
\t\t\t\t\t<p>会社概要</p>
\t\t\t\t</div>
\t\t\t\t<table class=\"about-table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>会社名</th>
\t\t\t\t\t\t\t<td>BOOK_EC</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>代表者名</th>
\t\t\t\t\t\t\t<td>架空</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>所在地</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>〒　000-9999</p>
\t\t\t\t\t\t\t\t<p>東京都千代田区丸の内　架空ビル32階</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>アクセス</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<iframe src=\"https://goo.gl/maps/w1mmJKtAmsUMLxYE7\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"wrapper last-wrapper\" id=\"contact\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wrapper-title\">
\t\t\t\t\t<h3>CONTACT</h3>
\t\t\t\t\t<p>お問い合わせ</p>
\t\t\t\t</div>
\t\t\t\t<form method=\"POST\" action=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/Contact/confirm.php\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<p>お名前 *</p>
\t\t\t\t\t\t<input type=\"text\" name=\"name\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<p>Email *</p>
\t\t\t\t\t\t<input type=\"email\" name=\"email\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<p>お問合せ内容 *</p>
\t\t\t\t\t\t<textarea name=\"text\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-submit\">内容を確認する</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</main>
</body>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 96,  81 => 26,  67 => 23,  64 => 22,  60 => 21,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/EC_shop/templates/index.html.twig");
    }
}
