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
                <form class=\"search\" action=\"";
        // line 37
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 54
            echo "                            <tr>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "first_name", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "mail", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "dm", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-green\" onclick=\"location.href='";
            // line 60
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/edit_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "'\">編集</button>
                                    <button type=\"button\" class=\"btn btn-red delete\" data-id='";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "' >削除</button>
                                    
                                    <form method=\"POST\" action=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/delete_user.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" value='";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "' name=\"id\">
                                    </form>
                                </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                    </table>
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
        return array (  149 => 69,  138 => 64,  132 => 63,  127 => 61,  121 => 60,  116 => 58,  112 => 57,  108 => 56,  104 => 55,  101 => 54,  97 => 53,  78 => 37,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "users.html.twig", "/var/www/html/EC_shop/templates/admin/users.html.twig");
    }
}
