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

/* /admin/order/orders.html.twig */
class __TwigTemplate_e5e5a13e8d906553d2c787482db40a582701241ed076fde88554126891457299 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/order/orders.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
            <div class=\"wrapper\">
                <div class=\"container\">
                    <div class=\"wrapper-title text-center\">
                        <h3>受注管理</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"sort-table\">
                        <thead class=\"border border-3 border-info table-primary\" >
                            <tr>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">　注文ID　　</th>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">　電話番号　</th>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">　合計金額　</th>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">　注文日時　</th>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">　更新日時　</th>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">注文ステータス</th>
                                <th class=\"text-center text-nowrap border border-3 border-info  bg-secondary\">　操　作　</th>
                            </tr>
                        </thead>
                        <tbody class=\"border border-3 border-info\">
                          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
            // line 23
            echo "                          <tr>
                            <td class=\"text-center border border-3 border-info\">";
            // line 24
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["orders"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
            echo "</td>
                            <td class=\"text-center border border-3 border-info\">";
            // line 25
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["orders"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["tel1"] ?? null) : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["orders"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["tel2"] ?? null) : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["orders"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["tel3"] ?? null) : null), "html", null, true);
            echo "</td>
                            <td class=\"text-center border border-3 border-info\">￥";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["orders"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["total"] ?? null) : null)), "html", null, true);
            echo "</td>
                            <td class=\"text-center border border-3 border-info\">";
            // line 27
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["orders"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["created_at"] ?? null) : null), "html", null, true);
            echo "</td>
                            <td class=\"text-center border border-3 border-info\">";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["orders"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["updated_at"] ?? null) : null), "html", null, true);
            echo "</td>
                                <td class=\"text-center border border-3 border-info\">
                                    ";
            // line 30
            if (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["orders"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["order_status"] ?? null) : null) == 0)) {
                // line 31
                echo "                                    <button type=\"button\" class=\"btn btn-danger\">受付中</button>
                                    ";
            } else {
                // line 33
                echo "                                    <button type=\"button\" class=\"btn btn-blue\">発送済</a></button>
                                    ";
            }
            // line 35
            echo "                                </td>
                                <td class=\"text-center border border-3 border-info\">
                                   <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 37
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/order_products.php?id=";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["orders"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["id"] ?? null) : null), "html", null, true);
            echo "'\">詳細</button>
<button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "' >注文取り消し</button>
<form method=\"POST\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/orders.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" value='1'>
<input type=\"hidden\" name=\"order_delete\" value='";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "'  name=\"id\">
\t\t\t\t\t\t\t\t\t</form>
                                </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                        </table>
                    </div>
                ";
        // line 48
        $this->loadTemplate("common/paging.html.twig", "/admin/order/orders.html.twig", 48)->display($context);
        // line 49
        echo "                </div>
            </div>
        </main>
 ";
        // line 52
        $this->loadTemplate("common/footer.html.twig", "/admin/order/orders.html.twig", 52)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/order/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  142 => 49,  140 => 48,  135 => 45,  124 => 40,  118 => 39,  114 => 38,  108 => 37,  104 => 35,  100 => 33,  96 => 31,  94 => 30,  89 => 28,  85 => 27,  81 => 26,  73 => 25,  69 => 24,  66 => 23,  62 => 22,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/order/orders.html.twig", "/var/www/html/EC_shop/templates/admin/order/orders.html.twig");
    }
}
