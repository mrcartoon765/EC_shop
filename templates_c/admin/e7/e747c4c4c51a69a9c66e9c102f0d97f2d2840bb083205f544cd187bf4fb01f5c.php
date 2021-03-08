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

/* edit_news.html.twig */
class __TwigTemplate_dcb495829b7b09a42b5ef7c30c7782cf490d52e3f635c4d0a5c8635bf531aa56 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>記事編集</title>

    <link rel=\"icon\" href=\"favicon.ico\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::CSS_FILE"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <header>
        <div class=\"container\">
            <div class=\"header-logo\">
                <h1><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/dashboard.php\">管理画面</a></h1>
            </div>

            <nav class=\"menu-right menu\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/logout.php\">ログアウト</a>
            </nav>
        </div>
    </header>
    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>編集</h3>
                </div>
                <form class=\"edit-form\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/update_news.php\" method=\"POST\">
                    <input type=\"hidden\" name=\"id\" value=";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["news"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
        echo ">
                    <div class=\"form-group\">
                        <p>タイトル</p>
                        <input type=\"text\" name=\"title\" value=";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["news"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null), "html", null, true);
        echo " required>
                    </div>
                    <div class=\"form-group\">
                        <p>本文</p>
                        <textarea name=\"content\">";
        // line 44
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["news"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["content"] ?? null) : null), "html", null, true);
        echo "</textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-blue\">更新する</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class=\"container\">
            <p>Copyright @ 2018 SQUARE, inc</p>
        </div>
    </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "edit_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  93 => 40,  87 => 37,  83 => 36,  70 => 26,  63 => 22,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit_news.html.twig", "/Applications/MAMP/htdocs/EC_shop/templates/admin/edit_news.html.twig");
    }
}
