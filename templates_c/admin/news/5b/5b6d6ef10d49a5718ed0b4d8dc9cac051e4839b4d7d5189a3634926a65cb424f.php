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

/* /admin/news/create_news.html.twig */
class __TwigTemplate_3ca5d9e50d845379cff0e3a7c35c293351412b76f5e9295cb45559a5d331887a extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/news/create_news.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title text-center\">
                    <h3>新規作成</h3>
                </div>
                        <form class=\"edit-form\" method=\"POST\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/store_news.php\">
                    <div class=\"form-group\">
                        <p>タイトル</p>
                        <input class=\"border border-3 border-info\" type=\"text\" name=\"title\" required>
                    </div>
                    <div class=\"form-group\">
                        <p>本文</p>
                        <textarea class=\"border border-3 border-info\" name=\"content\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">公開する</button>
                </form>
            </div>
        </div>
    </main>
 ";
        // line 22
        $this->loadTemplate("common/footer.html.twig", "/admin/news/create_news.html.twig", 22)->display($context);
        // line 23
        echo "    <footer>
        <div class=\"container\">
            <p>Copyright @ 2021 BOOK_EC</p>
        </div>
    </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/admin/news/create_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  64 => 22,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/news/create_news.html.twig", "/var/www/html/EC_shop/templates/admin/news/create_news.html.twig");
    }
}
