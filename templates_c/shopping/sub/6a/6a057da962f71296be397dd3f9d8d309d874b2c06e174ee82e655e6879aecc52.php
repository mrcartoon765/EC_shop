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

/* js/wantView.html.twig */
class __TwigTemplate_78988f9c6a221f13780d850490b8c439766fde4766f97d03ca837e6d8736e8c8 extends \Twig\Template
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
        echo "<!-- いいねボタン部分だけ切り取っています -->
<section class=\"post\" data-postid=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), ($context["title"] ?? null), [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <div class=\"btn-want ";
        // line 3
        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
        echo "\">
        <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
        <i class=\"fa-heart fa-lg px-16 ";
        // line 5
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i><span>";
        echo twig_escape_filter($this->env, ($context["Want"] ?? null), "html", null, true);
        echo "</span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "js/wantView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "js/wantView.html.twig", "/var/www/html/EC_shop/templates/js/wantView.html.twig");
    }
}
