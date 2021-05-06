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

/* /admin/dashboard.html.twig */
class __TwigTemplate_38fc33f528a3fd5f7f5bd2e8b69505d4dba02e21fde425e300a0aea65d558194 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/dashboard.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>ダッシュボード</h3>
\t\t\t</div>
\t\t\t<div class=\"boxs\">
\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/news/news.php\" class=\"box\">
\t\t\t\t\t<i class=\"far fa-newspaper icon\"></i>
\t\t\t\t\t<p>記事管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/user/users.php\" class=\"box\">
\t\t\t\t\t<i class=\"fas fa-users icon\"></i>
\t\t\t\t\t<p>会員管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/order/orders.php\" class=\"box\">
\t\t\t\t\t<i class=\"fas fa-ambulance icon\"></i>
\t\t\t\t\t<p>受注管理</p>
\t\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/book/Books.php\" class=\"box\">
\t\t\t\t\t\t<i class=\"fas fa-book-open icon\"></i>
\t\t\t\t\t\t<p>書籍管理</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo "admin/sub/secondary_products.php\" class=\"box\">
\t\t\t\t\t\t<i class=\"fas fa-book-open icon\"></i>
\t\t\t\t\t\t<p>副商材管理</p>
\t\t\t\t\t</a>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
 ";
        // line 33
        $this->loadTemplate("common/footer.html.twig", "/admin/dashboard.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  75 => 24,  68 => 20,  62 => 17,  55 => 13,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/dashboard.html.twig", "/var/www/html/EC_shop/templates/admin/dashboard.html.twig");
    }
}
