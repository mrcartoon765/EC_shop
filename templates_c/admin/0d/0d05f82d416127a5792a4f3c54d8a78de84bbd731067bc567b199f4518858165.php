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

/* create_Book_list.html.twig */
class __TwigTemplate_7eabd5d43026474385664f16b12a648a88dc883ca7705ec4f1b805317443bb4f extends \Twig\Template
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
                    <h3>書籍データ新規作成</h3>
                </div>
                <form class=\"edit-form\" method=\"POST\" action=\"../../admin/Book_product.php\" enctype=\"multipart/form-data\">
                <div class=\"form-group\"><p>商品名</p><input type=\"text\" name=\"title\" required></div>
                <div class=\"form-group\"><p>説明文</p><input type=\"text\" name=\"detail\" ></div>
                <div class=\"form-group\"><p>価格</p><input type=\"text\" name=\"price\" required></div>
                <div class=\"form-group\"><p>画像</p><input type=\"file\" name=\"image\" class=\"imgform\"></div>
                <div class=\"form-group\"><p>発売日</p><input type=\"text\" name=\"date\" required></div>
                <div class=\"form-group\"><p>関連商材ID</p><input type=\"text\" name=\"ctg_id\" required></div>
                <button type=\"submit\" class=\"btn btn-blue\">登録</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class=\"container\">
            <p>Copyright @ 2021 BOOK_EC</p>
        </div>
    </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "create_Book_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "create_Book_list.html.twig", "/var/www/html/EC_shop/templates/admin/create_Book_list.html.twig");
    }
}
