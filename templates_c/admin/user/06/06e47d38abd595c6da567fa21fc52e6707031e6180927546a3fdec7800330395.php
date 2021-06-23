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

/* /admin/user/create_dm.html.twig */
class __TwigTemplate_32dc8b2f83a969b0d576fc4aee2c5bf7fe26eb1c1a2ca001fa985b2e5e18c8c6 extends \Twig\Template
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
        echo "    ";
        $this->loadTemplate("common/header_admin.html.twig", "/admin/user/create_dm.html.twig", 1)->display($context);
        // line 2
        echo "\t  <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>メルマガ作成</h3>
                </div>
                <form class=\"edit-form\" method=\"POST\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "send_dm.php\">
                    <div class=\"form-group\">
                        <p>タイトル</p>
                        <input type=\"text\" name=\"title\" required>
                    </div>
                    <div class=\"form-group\">
                        <p>本文</p>
                        <textarea name=\"content\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-blue\">送信する</button>
                </form>
            </div>
        </div>
    </main>
 ";
        // line 22
        $this->loadTemplate("common/footer.html.twig", "/admin/user/create_dm.html.twig", 22)->display($context);
        // line 23
        echo "    <footer>
  <div class=\"container\">
  <p>Copyright @ 2021  HEALTH KNOWLEGE</p>
  </div>
  </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/admin/user/create_dm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  65 => 22,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/user/create_dm.html.twig", "/var/www/html/EC_shop/templates/admin/user/create_dm.html.twig");
    }
}
