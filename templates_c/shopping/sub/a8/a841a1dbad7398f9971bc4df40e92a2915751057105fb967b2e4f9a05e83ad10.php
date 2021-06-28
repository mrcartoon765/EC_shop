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

/* /shopping/sub/detail.html.twig */
class __TwigTemplate_ed287b32ea3872292b25dc4b7f81101e89f00687c79bdeaab0f8a1c09ebb4e11 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pickup' => [$this, 'block_pickup'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "shopping/book/detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["ctg1"] = [1 => "食品", 2 => "サプリ", 3 => "ガジェット", 4 => "家具・寝具", 5 => "美容品"];
        // line 2
        $context["ctg2"] = [1 => "ストレス対策", 2 => "アンチエイジング", 3 => "集中力改善", 4 => "睡眠改善", 5 => "ダイエット"];
        // line 3
        $context["books"] = [1 => "超ストレス解消法", 2 => "最高の体調", 3 => "【新装版】一生リバウンドしないパレオダイエットの教科書", 4 => "ヤバい集中力　１日ブッ通しで頭が冴えわたる神ライフハック45", 5 => "科学的な適職", 6 => "不老長寿メソッド　死ぬまで若いは武器になる"];
        // line 4
        $context["a"] = 0;
        // line 5
        $this->parent = $this->loadTemplate("shopping/book/detail.html.twig", "/shopping/sub/detail.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_pickup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"container\">
<div class=\"conatinet-title\">
<h1 class=\"text-center d-none d-md-block\" style=\"margin-bottom:2rem;\">あなたにオススメの商品</h1>
</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-6\" style=\"margin-bottom:2rem;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "book/detail.php?id=";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book_data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["book_image"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid rounded mx-auto\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-title text-center\"><h5>関連書籍</h5></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-text  text-center\"><h5>書籍名<br>";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["book_data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null), "html");
        echo "</h5></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-text  text-center\"><h5>発売日<br>";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["book_data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["date"] ?? null) : null), "html", null, true);
        echo "<br></h5></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-text  text-center\"><h5>価格:￥";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["book_data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["price"] ?? null) : null)), "html", null, true);
        echo "</h5></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-center d-block d-md-none text-nowrap\" style=\"margin-bottom:2rem;\">あなたにオススメの商品</h3>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg2"] ?? null), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ctg2", [], "any", false, false, false, 27), [], "any", false, false, false, 27), "html", null, true);
        echo "関連商品</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"slider\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ctg2_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ctg2"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["subdetail"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["ctg2"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null), "html", null, true);
            echo "\"><img class=\"img-thumbnail\" src=\"";
            echo twig_escape_filter($this->env, ($context["image_dir"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["ctg2"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["image"] ?? null) : null), "html", null, true);
            echo "\" style=\"width:8rem; height:8rem;\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["ctg2"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null)) > 30)) ? ((twig_slice($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["ctg2"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["title"] ?? null) : null), 0, 30) . "...")) : ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["ctg2"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["title"] ?? null) : null))), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">￥";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["ctg2"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["price"] ?? null) : null)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctg2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg1"] ?? null), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ctg1", [], "any", false, false, false, 38), [], "any", false, false, false, 38), "html", null, true);
        echo "関連商品</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"slider\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ctg1_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ctg1"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["subdetail"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["ctg1"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["id"] ?? null) : null), "html", null, true);
            echo "\"><img class=\"img-thumbnail\" src=\"";
            echo twig_escape_filter($this->env, ($context["image_dir"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["ctg1"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["image"] ?? null) : null), "html", null, true);
            echo "\" style=\"width:8rem; height:8rem;\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["ctg1"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["title"] ?? null) : null)) > 30)) ? ((twig_slice($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["ctg1"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["title"] ?? null) : null), 0, 30) . "...")) : ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["ctg1"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["title"] ?? null) : null))), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">￥";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["ctg1"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["price"] ?? null) : null)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctg1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<br><p></p>
<div class=\"text-center\">
<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "sub/sublist_all.php\">
\t<button class=\"btn btn-gray\">関連商品一覧へ</button>
\t</a>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "/shopping/sub/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 54,  168 => 47,  159 => 44,  155 => 43,  147 => 42,  144 => 41,  140 => 40,  135 => 38,  131 => 36,  122 => 33,  118 => 32,  110 => 31,  107 => 30,  103 => 29,  98 => 27,  89 => 21,  85 => 20,  81 => 19,  74 => 16,  67 => 14,  59 => 8,  55 => 7,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/detail.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/detail.html.twig");
    }
}
