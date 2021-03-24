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

/* users.html.twig */
class __TwigTemplate_800a5a654f9861dbaecd736b3ead6bacaa804f1d956057189d0cce15bf6d3010 extends \Twig\Template
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

    <title>会員管理</title>

    <link rel=\"icon\" href=\"favicon.ico\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::CSS_FILE"), "html", null, true);
        echo "\" rel=\"stylesheet\">    
    </head>

<body>
    <header>
        <div class=\"container\">
            <div class=\"header-logo\">
                <h1><a href=\"dashboard.php\">管理画面</a></h1>
            </div>

            <nav class=\"menu-right menu\">
                <a href=\"index.html\">ログアウト</a>
            </nav>
        </div>
    </header>
    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>会員管理</h3>
                </div>
                <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/download.php'\">CSV出力</button>
                <form class=\"serch\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/users.php\" method=\"GET\">
                    <input type=\"text\" name=\"first_name\" placeholder=\"名前検索\">
                    <button type=\"submit\" class=\"btn btn-blue\">検索</button>
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
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 55
            echo "                            <tr>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "first_name", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "mail", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, ($context["dm"] ?? null), "html", null, true);
            echo "</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-green\" onclick=\"location.href='";
            // line 61
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/edit_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "'\">編集</button>
                                    <button type=\"button\" class=\"btn btn-red delete\" data-id='";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "' >削除</button>
                                    
                                    <form method=\"POST\" action=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/delete_user.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" value='";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "' name=\"id\">
                                    </form>
                                </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </tbody>
                    </table>
                    <ul class=\"paging\">
                    <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/users.php?first_name=";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">« 最初</a></li>

                    ";
        // line 75
        if ((($context["prev"] ?? null) != "")) {
            // line 76
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/users.php?page=";
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
        // line 78
        echo "
                    <li><span>";
        // line 79
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span></li>

                    ";
        // line 81
        if ((($context["next"] ?? null) != "")) {
            // line 82
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/users.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "&first_name=";
            echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 84
        echo "
                    <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
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
    <footer>
        <div class=\"container\">
            <p>Copyright @ 2018 SQUARE, inc</p>
        </div>
  </footer>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
   <script>
       \$(\".delete\").click(function(){
           var id = this.dataset.id
           if(confirm(\"ID:\"+id+\"番のユーザーを本当に削除していいですか？\")){
               //OK
               \$(\"#delete_form_\"+id).submit();
           }else{
               //キャンセル
               return false;
           }
       })
   </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 85,  203 => 84,  191 => 82,  189 => 81,  184 => 79,  181 => 78,  167 => 76,  165 => 75,  158 => 73,  153 => 70,  142 => 65,  136 => 64,  131 => 62,  125 => 61,  120 => 59,  116 => 58,  112 => 57,  108 => 56,  105 => 55,  101 => 54,  82 => 38,  78 => 37,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "users.html.twig", "/var/www/html/EC_shop/templates/admin/users.html.twig");
    }
}
