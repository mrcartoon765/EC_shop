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

/* dashboard.html.twig */
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
        echo "<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title\">
\t\t\t\t<h3>ダッシュボード</h3>
\t\t\t</div>
\t\t\t<div class=\"boxs\">
\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/news.php\" class=\"box\">
\t\t\t\t\t<i class=\"far fa-newspaper icon\"></i>
\t\t\t\t\t<p>記事管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/users.php\" class=\"box\">
\t\t\t\t\t<i class=\"fas fa-users icon\"></i>
\t\t\t\t\t<p>会員管理</p>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/orders.php\" class=\"box\">
\t\t\t\t\t<i class=\"fas fa-ambulance icon\"></i>
\t\t\t\t\t<p>受注管理</p>
\t\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "admin/create_Book_list.php\" class=\"box\">
\t\t\t\t\t\t<i class=\"fas fa-book-open icon\"></i>
\t\t\t\t\t\t<p>書籍管理</p>
\t\t\t\t\t</a>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</main></body></html>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  60 => 16,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.html.twig", "/var/www/html/EC_shop/templates/admin/dashboard.html.twig");
    }
}
