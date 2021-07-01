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

<div class=\"col text-nowrap text-center\" style=\"margin-top:2rem;\">

<h3 class=\"text-center\">SNSでシェアする</h3>

";
        // line 9
        if (twig_in_filter("/sub/", ($context["this_url"] ?? null))) {
            // line 10
            echo "
<a href=\"https://twitter.com/share?url=";
            // line 11
            echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
            echo "&
via=CKN5bDfebvPdCsj&
hashtags=健康知識,パレオな男&
text=著者：鈴木裕(パレオな男)による「";
            // line 14
            (((twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book_data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null)) > 30)) ? (print (twig_escape_filter($this->env, (twig_slice($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["book_data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null), 0, 30) . "..."), "html", null, true))) : (print (twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["book_data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null), "html"))));
            echo "」にて紹介されている商品「";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["value"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["title"] ?? null) : null)) > 30)) ? ((twig_slice($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["value"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["title"] ?? null) : null), 0, 30) . "...")) : ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["value"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["title"] ?? null) : null))), "html", null, true);
            echo "」のご紹介です\"
rel=\"nofollow\"
target=\"_blank\"><i class=\"fab fa-twitter fa-4x\" style=\"color:#00aced;\"></i>
</a>

\t";
        } else {
            // line 20
            echo "
<a href=\"https://twitter.com/share?url=";
            // line 21
            echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
            echo "&
via=CKN5bDfebvPdCsj&
hashtags=健康知識,パレオな男&
text=著者：鈴木裕(パレオな男)による「";
            // line 24
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["value"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null), "html");
            echo "」のご紹介です\"
rel=\"nofollow\"
target=\"_blank\"><i class=\"fab fa-twitter fa-4x\" style=\"color:#00aced;\"></i>
</a>


";
        }
        // line 31
        echo "
<a href=\"https://getpocket.com/edit?url=";
        // line 32
        echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
        echo "&title=";
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["value"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["title"] ?? null) : null), "html", null, true);
        echo "\" rel=\"nofollow\" rel=\"nofollow\" target=\"_blank\"><i class=\"fab fa-get-pocket fa-4x\" style=\"color:red\"></i></a>

<a href=\"https://b.hatena.ne.jp/add?mode=confirm&url=";
        // line 34
        echo twig_escape_filter($this->env, ($context["thi_url"] ?? null), "html", null, true);
        echo "\" rel=\"nofollow\" target=\"_blank\" style=\"margin:0px;\">
<i class=\"fas fa-bold fa-4x\"></i>
</button>
</a>

<a href=\"https://line.me/R/msg/text/";
        // line 39
        echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fab fa-line fa-4x\" style=\"color:#00c300\"></i>
</a>

<a href=\"https://www.facebook.com/share.php?u=";
        // line 42
        echo twig_escape_filter($this->env, ($context["this_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-square fa-4x\" style=\"color:#315096;\"></i></a>

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
        return array (  113 => 42,  107 => 39,  99 => 34,  92 => 32,  89 => 31,  79 => 24,  73 => 21,  70 => 20,  59 => 14,  53 => 11,  50 => 10,  48 => 9,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/shopping/share_button.html.twig", "/var/www/html/EC_shop/templates/common/shopping/share_button.html.twig");
    }
}
