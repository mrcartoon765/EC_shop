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
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>ダッシュボード</h3>
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
        echo "news/news.php\" class=\"box col-6 col-md-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<i class=\"far fa-newspaper icon\"></i>
\t\t\t\t\t<p>記事管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
        echo "user/users.php\" class=\"box col-6 col-md-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<i class=\"fas fa-users icon\"></i>
\t\t\t\t\t<p>会員管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
        echo "order/orders.php\" class=\"box col-6 col-md-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<i class=\"fas fa-ambulance icon\"></i>
\t\t\t\t\t<p>受注管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
        echo "book/books.php\" class=\"box col-6 col-md-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<i class=\"fas fa-book-open icon\"></i>
\t\t\t\t\t<p>書籍管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
        echo "sub/secondary_products.php\" class=\"box col-6 col-md-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<i class=\"fas fa-apple-alt icon\"></i>
\t\t\t\t\t<p>副商材管理</p>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 38
        $this->loadTemplate("common/footer.html.twig", "/admin/dashboard.html.twig", 38)->display($context);
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
        return array (  92 => 38,  80 => 29,  72 => 24,  64 => 19,  56 => 14,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/dashboard.html.twig", "/var/www/html/EC_shop/templates/admin/dashboard.html.twig");
    }
}
