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

/* /admin/order/order_products.html.twig */
class __TwigTemplate_3bd076851530003bdea536cae7af90cfafc0ce6afed35bc0a62de1fee7e0bf36 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/order/order_products.html.twig", 1)->display($context);
        // line 2
        $context["books"] = [1 => "超ストレス解消法", 2 => "最高の体調", 3 => "【新装版】一生リバウンドしないパレオダイエットの教科書", 4 => "ヤバい集中力　１日ブッ通しで頭が冴えわたる神ライフハック45", 5 => "科学的な適職", 6 => "不老長寿メソッド　死ぬまで若いは武器になる"];
        // line 3
        echo "\t<main>
            <div class=\"wrapper\">
                <div class=\"container\">
                    <div class=\"wrapper-title\">
                        <h3>受注明細</h3>
                    </div>
                    <div class=\"list\">
                    <h4>購入者情報</h4>
                        <table>
                        <tbody>
                        <tr><th>氏名</th><td>";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["orders"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_name"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>郵便番号</th><td>";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["orders"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["zip1"] ?? null) : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["orders"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["zip2"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>住所</th><td>";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["orders"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["address"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>メールアドレス</th><td>";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["orders"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["mail"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>電話番号</th><td>";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["orders"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["tel1"] ?? null) : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["orders"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["tel2"] ?? null) : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["orders"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["tel3"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>合計金額</th><td>￥";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["orders"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["total"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>受注日時</th><td>";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["orders"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["created_at"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>更新日時</th><td>";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["orders"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["update_at"] ?? null) : null), "html", null, true);
        echo "</td></tr>
                        <tr><th>注文状況</th><td>
                        ";
        // line 22
        if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["orders"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["order_status"] ?? null) : null) == 0)) {
            // line 23
            echo "                        <button class=\"btn btn-danger\">受付中</button>
                        <button type=\"button\" class=\"btn btn-blue\" onclick=\"location.href='";
            // line 24
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/update_order_status.php?id=";
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["orders"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["id"] ?? null) : null), "html", null, true);
            echo "'\">発送済みにする</button>
                        ";
        } else {
            // line 26
            echo "                        <button type=\"button\" class=\"btn btn-blue\">発送済</button>
                        <button type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='";
            // line 27
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/update_order_status.php?id=";
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["orders"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["id"] ?? null) : null), "html", null, true);
            echo "'\">発送を取り消す</button>
                        ";
        }
        // line 29
        echo "                        </td></tr>
                        </tbody>
                        </table>
                    </div>
                <div class=\"list\">
                <h4>商品詳細</h4>
                 <table class=\"sort-table\">
                        <thead>
                        <tr>
                        <th>id</th>
                        <th>注文id</th>
                        <th>商品名</th>
                        <th>個数</th>
                        <th>金額</th>
                        <th>小計金額</th>
                        <th>関連書籍</th>
                        <th>操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 50
        $context["a"] = 0;
        // line 51
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_detail"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 52
            echo "                        <tr>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "order_id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 55), "html");
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "num", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                        <td>￥";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                        <td>￥";
            // line 58
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["value"], "num", [], "any", false, false, false, 58) * twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 58)), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["books"] ?? null), twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 59), [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td>
                        <form action=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/admin/order/order_products_status.php\" method=\"POST\">
                        <div class=\"spinner_area\">
                        <div class=\"row\">
                        <div class=\"col-1\">
    <input type=\"number\" name=\"num\" value=";
            // line 65
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["value"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["num"] ?? null) : null), "html", null, true);
            echo " class=\"counter";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\" data-max=\"500\" data-min=\"0\" style=\"width:70px\">
                        </div>
                        <div class=\"col-1\">
    <input type=\"button\" value=\"＋\" class=\"btnspinner btn-info\" data-cal=\"1\" data-target=\".counter";
            // line 68
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"col-1\">
    <input type=\"button\" value=\"－\" class=\"btnspinner\" data-cal=\"-1\" data-target=\".counter";
            // line 71
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
                        </div>
    <input type=\"hidden\" name=\"id\" value=";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["value"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["id"] ?? null) : null), "html", null, true);
            echo ">
    <input type=\"hidden\" name=\"order_id\" value=";
            // line 74
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["value"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["order_id"] ?? null) : null), "html", null, true);
            echo ">
                        <div class=\"col\">
    <button type=\"submit\">変更する</button>
                        </div>
                        </div>
                        </form>
                        </td>
                        ";
            // line 81
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </tbody>
                        </table>
                        </div>
                </div>
                </div>
            </div>
        </main>
 ";
        // line 90
        $this->loadTemplate("common/footer.html.twig", "/admin/order/order_products.html.twig", 90)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/order/order_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 90,  225 => 83,  219 => 82,  217 => 81,  207 => 74,  203 => 73,  198 => 71,  192 => 68,  184 => 65,  177 => 61,  172 => 59,  168 => 58,  164 => 57,  160 => 56,  156 => 55,  152 => 54,  148 => 53,  145 => 52,  140 => 51,  138 => 50,  115 => 29,  108 => 27,  105 => 26,  98 => 24,  95 => 23,  93 => 22,  88 => 20,  84 => 19,  80 => 18,  72 => 17,  68 => 16,  64 => 15,  58 => 14,  54 => 13,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/order/order_products.html.twig", "/var/www/html/EC_shop/templates/admin/order/order_products.html.twig");
    }
}
