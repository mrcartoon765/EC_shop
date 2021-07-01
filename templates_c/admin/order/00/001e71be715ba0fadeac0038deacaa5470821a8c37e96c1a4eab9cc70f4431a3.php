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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/order/order_products.html.twig", 1)->display($context);
        // line 2
        echo "
<br>
<main>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper-title text-center\">
\t\t\t\t<h3>受注明細</h3>
\t\t\t</div>
\t\t\t\t<h4 class=\"text-center\">購入者情報</h4>
\t\t\t<div class=\"table-responsive\">

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap \">氏名</th>
\t\t\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["orders"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["family_name"] ?? null) : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["orders"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["first_name"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">郵便番号</th>
\t\t\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["orders"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["zip1"] ?? null) : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["orders"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["zip2"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">住所</th>
\t\t\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["orders"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["address"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">メールアドレス</th>
\t\t\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["orders"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["mail"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">電話番号</th>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["orders"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["tel1"] ?? null) : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["orders"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["tel2"] ?? null) : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["orders"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["tel3"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">合計金額</th>
\t\t\t\t\t\t\t<td>￥";
        // line 37
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["orders"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["total"] ?? null) : null)), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">受注日時</th>
\t\t\t\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["orders"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["created_at"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">更新日時</th>
\t\t\t\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["orders"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["updated_at"] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"border border-3 border-info\">
\t\t\t\t\t\t\t<th class=\"border border-3 border-info table-primary text-nowrap\">注文状況</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 50
        if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["orders"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["order_status"] ?? null) : null) == 0)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\">受付中</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 52
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/update_order_status.php?id=";
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["orders"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["id"] ?? null) : null), "html", null, true);
            echo "'\">発送済みにする</button>
\t\t\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">発送済</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='";
            // line 55
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/update_order_status.php?id=";
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["orders"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["id"] ?? null) : null), "html", null, true);
            echo "'\">発送を取り消す</button>
\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</div>
            <br><p></p><br>
\t\t\t\t<h4 class=\"text-center\">商品詳細</h4>
\t\t\t\t<div class=\"list table-responsive\">
\t\t\t\t<table class=\"sort-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">　i d　</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">注文 id</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">商 品 名</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">個　　数</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">金　　額</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">小計金額</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">関連書籍</th>
\t\t\t\t\t\t\t<th class=\"text-center text-nowrap border border-3 border-info bg-secondary\">操　　作</th>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 80
        $context["a"] = 0;
        // line 81
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_detail"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 82
            echo "\t\t\t\t\t\t\t";
            $context["b"] = twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 82);
            $context["small_sum"] = (twig_get_attribute($this->env, $this->source, $context["value"], "num", [], "any", false, false, false, 82) * twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 82));
            // line 83
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "order_id", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "product_title", [], "any", false, false, false, 86), "html");
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "num", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">￥";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 88)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">￥";
            // line 89
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["small_sum"] ?? null)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">";
            // line 90
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["book_title"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["b"] ?? null)] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["title"] ?? null) : null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center border border-3 border-info\">
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "/admin/order/order_products_status.php\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
                                                \t\t\t\t\t\t<input type=\"button\" value=\"＋\" class=\"btnspinner btn-info\" data-cal=\"1\" data-target=\".counter";
            // line 96
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"nums\" value=";
            // line 100
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["value"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["num"] ?? null) : null), "html", null, true);
            echo " class=\"counter";
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo " text-center\" data-max=\"500\" data-min=\"0\" style=\"width:70px\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"－\" class=\"btnspinner btn-info\" data-cal=\"-1\" data-target=\".counter";
            // line 103
            echo twig_escape_filter($this->env, ($context["a"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=";
            // line 104
            echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["value"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["id"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"order_id\" value=";
            // line 105
            echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["value"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["order_id"] ?? null) : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">変更する</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
            // line 113
            $context["a"] = (($context["a"] ?? null) + 1);
            // line 114
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t</div>
</div></main>";
        // line 121
        $this->loadTemplate("common/footer.html.twig", "/admin/order/order_products.html.twig", 121)->display($context);
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
        return array (  268 => 121,  260 => 115,  254 => 114,  252 => 113,  241 => 105,  237 => 104,  233 => 103,  225 => 100,  218 => 96,  211 => 92,  206 => 90,  202 => 89,  198 => 88,  194 => 87,  190 => 86,  186 => 85,  182 => 84,  179 => 83,  175 => 82,  170 => 81,  168 => 80,  143 => 57,  136 => 55,  133 => 54,  126 => 52,  123 => 51,  121 => 50,  113 => 45,  106 => 41,  99 => 37,  88 => 33,  81 => 29,  74 => 25,  65 => 21,  56 => 17,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/order/order_products.html.twig", "/var/www/html/EC_shop/templates/admin/order/order_products.html.twig");
    }
}
