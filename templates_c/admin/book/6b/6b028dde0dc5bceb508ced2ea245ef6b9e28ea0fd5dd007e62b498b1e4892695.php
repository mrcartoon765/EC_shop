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

/* /admin/book/create_book_list.html.twig */
class __TwigTemplate_f0d70ff03b23e3980ed843d914e5da20524a35d1b0c95fae08b1b85408d4ab97 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/book/create_book_list.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3 class=\"text-center\">書籍データ新規作成</h3>
                </div>
                <form class=\"edit-form\" method=\"POST\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/book_product.php\" enctype=\"multipart/form-data\">
                <div class=\"form-group\"><h3>商品名</h3><input class=\"border border-3 border-info\" type=\"text\" name=\"title\" required></div>
                <div class=\"form-group\"><h3>説明文</h3><textarea class=\"border border-3 border-info\"  name=\"detail\" ></textarea></div>
                <div class=\"form-group\"><h3>価格</h3><input class=\"border border-3 border-info\"  type=\"text\" name=\"price\" required></div>
                <div class=\"form-group\"><h3>画像</h3><input class=\"border border-3 border-info\"  type=\"file\" name=\"image\" class=\"imgform\"></div>
                <div class=\"form-group\"><h3>発売日</h3><input class=\"border border-3 border-info\"  type=\"text\" name=\"date\" required></div>
                <div class=\"form-group\"><h3>関連商材ID</h3><input class=\"border border-3 border-info\"  type=\"text\" name=\"ctg_id\" required></div>
                <button type=\"submit\" class=\"btn btn-lg btn-success\">登録</button>
                </form>
            </div>
        </div>
    </main>
 ";
        // line 20
        $this->loadTemplate("common/footer.html.twig", "/admin/book/create_book_list.html.twig", 20)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/book/create_book_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/book/create_book_list.html.twig", "/var/www/html/EC_shop/templates/admin/book/create_book_list.html.twig");
    }
}
