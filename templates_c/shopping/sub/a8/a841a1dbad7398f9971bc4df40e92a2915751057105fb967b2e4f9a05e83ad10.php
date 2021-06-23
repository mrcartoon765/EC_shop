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
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["shopping"] ?? null), "html", null, true);
        echo "book/detail.php?id=";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["book_data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["book_image"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid rounded mx-auto\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-title text-center\">関連書籍</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-text text-center\">書籍名：";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["book_data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null), "html");
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-text text-center\">発売日：";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["book_data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["date"] ?? null) : null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-text text-center\">価格：￥";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["book_data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["price"] ?? null) : null)), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-center\">あなたにオススメの商品</h3>\t<p class=\"text-center\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg2"] ?? null), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ctg2", [], "any", false, false, false, 23), [], "any", false, false, false, 23), "html", null, true);
        echo "関連商品</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"slider\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ctg2_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ctg2"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["subdetail"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["ctg2"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null), "html", null, true);
            echo "\"><img class=\"img-thumbnail\" src=\"";
            echo twig_escape_filter($this->env, ($context["image_dir"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["ctg2"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["image"] ?? null) : null), "html", null, true);
            echo "\" alt=\"\" srcset=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["ctg2"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null), "html");
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">￥";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["ctg2"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["price"] ?? null) : null)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctg2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ctg1"] ?? null), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ctg1", [], "any", false, false, false, 33), [], "any", false, false, false, 33), "html", null, true);
        echo "関連商品</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"slider\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ctg1_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ctg1"]) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["subdetail"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["ctg1"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["id"] ?? null) : null), "html", null, true);
            echo "\"><img class=\"img-thumbnail\" src=\"";
            echo twig_escape_filter($this->env, ($context["image_dir"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["ctg1"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["image"] ?? null) : null), "html", null, true);
            echo "\" alt=\"\" srcset=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
            // line 38
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["ctg1"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["title"] ?? null) : null), "html");
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">￥";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["ctg1"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["price"] ?? null) : null)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctg1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

<br><p></p>

<div class=\"text-center\">
<a href=\"";
        // line 50
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
        return array (  173 => 50,  163 => 42,  154 => 39,  150 => 38,  142 => 37,  139 => 36,  135 => 35,  130 => 33,  127 => 32,  118 => 29,  114 => 28,  106 => 27,  103 => 26,  99 => 25,  94 => 23,  86 => 18,  82 => 17,  78 => 16,  71 => 13,  64 => 11,  59 => 8,  55 => 7,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "/shopping/sub/detail.html.twig", "/var/www/html/EC_shop/templates/shopping/sub/detail.html.twig");
    }
}
