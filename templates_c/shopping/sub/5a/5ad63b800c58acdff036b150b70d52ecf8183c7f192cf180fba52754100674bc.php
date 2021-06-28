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

/* common/shopping/share_button.html.twig */
class __TwigTemplate_202ab56e57b5398a8cf6dd0354923a0301e469b4783d880c5ec9d489e56c10eb extends \Twig\Template
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
        echo "
";
        // line 3
        echo "
<div class=\"container\" style=\"margin-top:2rem;\">

<div class=\"fb-share-button\"
     data-href=\"https://murashun.jp/\"
     data-layout=\"button_count\"></div>

";
        // line 10
        if (twig_in_filter("/sub/", ($context["this_url"] ?? null))) {
            // line 11
            echo "
<a href=\"https://twitter.com/share?url=";
            // line 12
            echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
            echo "&
via=CKN5bDfebvPdCsj&
hashtags=健康知識,パレオな男&
text=著者：鈴木裕(パレオな男)による「";
            // line 15
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book_data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html");
            echo "」にて紹介されている商品「";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["value"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null), "html", null, true);
            echo "」のご紹介です\"
rel=\"nofollow\"
target=\"_blank\"><i class=\"fab fa-twitter fa-3x\"></i>
</a>

\t";
        } else {
            // line 21
            echo "
<a href=\"https://twitter.com/share?url=";
            // line 22
            echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
            echo "&
via=CKN5bDfebvPdCsj&
hashtags=健康知識,パレオな男&
text=著者：鈴木裕(パレオな男)による「";
            // line 25
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["value"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null), "html");
            echo "」のご紹介です\"
rel=\"nofollow\"
target=\"_blank\"><i class=\"fab fa-twitter fa-3x\"></i>
</a>


";
        }
        // line 32
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "common/shopping/share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  80 => 25,  74 => 22,  71 => 21,  60 => 15,  54 => 12,  51 => 11,  49 => 10,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/shopping/share_button.html.twig", "/var/www/html/EC_shop/templates/common/shopping/share_button.html.twig");
    }
}
