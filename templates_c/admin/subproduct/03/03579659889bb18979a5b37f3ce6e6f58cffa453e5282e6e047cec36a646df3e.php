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

/* /admin/sub/secondary_products.html.twig */
class __TwigTemplate_2ede3d29c5562640f70fb625223e6b4880f0938bd981503b2493d3be31841525 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/sub/secondary_products.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
    <div class=\"wrapper last-wrapper \">
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>副商材管理</h3>
                </div>
                <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
        // line 9
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/create_sub.php'\">副商材を新規登録する</button>
                <div class=\"list\">
                    <table>
                        <thead>
                            <tr>
                                <th>副商材ID</th>
                                <th>商品名</th>
                                <th>説明文</th>
                                <th>価格</th>
                                <th>画像</th>
                                <th>関連商材名</th>
                                <th>カテゴリ1</th>
                                <th>カテゴリ2</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subproduct"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 27
            echo "                            <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td><img src=";
            // line 32
            echo twig_escape_filter($this->env, ($context["APP_URL"] ?? null), "html", null, true);
            echo "\"/shopping/image/sub/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"\"></td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>\"\"</td>
                            <td>\"\"</td>
                            <td>
                            <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 37
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/edit_book.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "'\">編集</button>

                            <button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 39), "html", null, true);
            echo "' >削除</button>

                            <form method=\"POST\" action=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "/delete_sub.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                            <input type=\"hidden\" value='";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 42), "html", null, true);
            echo "' name=\"book_id\">
                            </form>
                            </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>
 ";
        // line 54
        $this->loadTemplate("common/footer.html.twig", "/admin/sub/secondary_products.html.twig", 54)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/sub/secondary_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  134 => 47,  123 => 42,  117 => 41,  112 => 39,  105 => 37,  98 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  73 => 27,  69 => 26,  49 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/sub/secondary_products.html.twig", "/var/www/html/EC_shop/templates/admin/sub/secondary_products.html.twig");
    }
}
