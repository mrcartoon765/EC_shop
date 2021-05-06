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

/* /admin/user/users.html.twig */
class __TwigTemplate_76ad8f0e5165d3d75c8cd523f7976b369608462e30a6cfe4054f69a0185d4b58 extends \Twig\Template
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
        $this->loadTemplate("common/header_admin.html.twig", "/admin/user/users.html.twig", 1)->display($context);
        // line 2
        echo "\t<main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>会員管理</h3>
                </div>
                <button type=\"bnutton\" class='btn btn-primary' onclick=\"location.href='";
        // line 8
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "create_dm.php'\">メルマガ配信</button>
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"location.href='";
        // line 9
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "download.php'\">CSV出力</button>
                <form class=\"serch\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "users.php\" method=\"GET\">
                    <input type=\"text\" name=\"first_name\" placeholder=\"名前検索\">
                    <button type=\"submit\" class=\"btn btn-primary\">検索</button>
                </form>
                <div class=\"list\">
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>名前</th>
                                <th>メールアドレス</th>
                                <th>DM配信</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 27
            echo "                            <tr>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "first_name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "mail", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "dm", [], "any", false, false, false, 31) == 1)) {
                // line 32
                echo "                                    <td>受信する</td>
                                    ";
            } else {
                // line 34
                echo "                                    <td>受信しない</td>
                                ";
            }
            // line 36
            echo "                                <td>
                                    <button type=\"button\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 37
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "edit_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "'\">編集</button>
                                    <button type=\"button\" class=\"btn btn-danger delete\" data-id='";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "' >削除</button>
                                    
                                    <form method=\"POST\" action=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "delete_user.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" value='";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "' name=\"id\">
                                    </form>
                                </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </tbody>
                    </table>
                                    </div>

                    <ul class=\"paging\">
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "users.php?first_name=";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">« 最初</a></li>

                    ";
        // line 53
        if ((($context["prev"] ?? null) != "")) {
            // line 54
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "users.php?page=";
            echo twig_escape_filter($this->env, ($context["prev"] ?? null), "html", null, true);
            echo "&first_name=";
            echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo "-1>";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 56
        echo "
                    <li><span>";
        // line 57
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span></li>

                    ";
        // line 59
        if ((($context["next"] ?? null) != "")) {
            // line 60
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
            echo "users.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&first_name=";
            echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 62
        echo "
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["ENTRY_URL"] ?? null), "html", null, true);
        echo "/users.php?page=";
        echo twig_escape_filter($this->env, ($context["pages"] ?? null), "html", null, true);
        echo "&fisrt_name=";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">最後 »</a></li>
                    </ul>
            </div>
        </div>
        </div>
    </main>
     ";
        // line 69
        $this->loadTemplate("common/footer.html.twig", "/admin/user/users.html.twig", 69)->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/user/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 69,  190 => 63,  187 => 62,  175 => 60,  173 => 59,  168 => 57,  165 => 56,  151 => 54,  149 => 53,  142 => 51,  135 => 46,  124 => 41,  118 => 40,  113 => 38,  107 => 37,  104 => 36,  100 => 34,  96 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  79 => 27,  75 => 26,  56 => 10,  52 => 9,  48 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/user/users.html.twig", "/var/www/html/EC_shop/templates/admin/user/users.html.twig");
    }
}
