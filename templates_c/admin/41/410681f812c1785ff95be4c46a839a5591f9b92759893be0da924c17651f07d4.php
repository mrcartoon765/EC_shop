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

/* create_dm.html.twig */
class __TwigTemplate_c26b1af14bee07a7631336c3b985c4d9893b67744a87ef88da2c085b3082ec32 extends \Twig\Template
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
        echo "    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>メルマガ作成</h3>
                </div>
                <form class=\"edit-form\" method=\"POST\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/send_dm.php\">
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
    <footer>
  <div class=\"container\">
  <p>Copyright @ 2021  HEALTH KNOWLEGE</p>
  </div>
  </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "create_dm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "create_dm.html.twig", "/var/www/html/EC_shop/templates/admin/create_dm.html.twig");
    }
}
