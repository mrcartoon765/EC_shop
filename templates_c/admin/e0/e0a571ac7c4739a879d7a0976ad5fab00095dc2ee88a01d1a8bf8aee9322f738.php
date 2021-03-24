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

/* news.html.twig */
class __TwigTemplate_07a852a7875b706fc1eb64f5717813a03366132184819436aa156c690c0ee5f0 extends \Twig\Template
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

    <title>記事管理</title>

    <link rel=\"icon\" href=\"favicon.ico\">
    <!-- css -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::CSS_FILE"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
  
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
</head>

<body>
    <header>
        <div class=\"container\">
            <div class=\"header-logo\">
                <h1><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/dashboard.php\">管理画面</a></h1>
            </div>

            <nav class=\"menu-right menu\">
                <a href=\"logout.php\">ログアウト</a>
            </nav>
        </div>
    </header>
    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>記事管理</h3>
                </div>
                <button type=\"button\" class=\"btn btn-blue\" onclick=\"location.href='create_news.php'\">投稿する</button>
                <div class=\"list\">
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>タイトル</th>
                                <th>本文</th>
                                <th>更新日時</th>
                                <th>作成日時</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 52
            echo "                            <tr>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "updated_at", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "created_at", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                            <td>
                            <button type=\"button\" class=\"btn btn-green\" onclick=\"location.href='";
            // line 59
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/edit_news.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "'\">編集</button>
                            
                            <button type=\"button\" class=\"btn btn-red delete\" data-id='";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "' >削除</button>
                            
                            <form method=\"POST\" action=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/delete_news.php\" id=\"delete_form_";
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
           var id = this.dataset.id;
           if(confirm(\"ID:\"+id+\"番の記事を本当に削除していいですか？\")){
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
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  141 => 64,  135 => 63,  130 => 61,  123 => 59,  118 => 57,  114 => 56,  110 => 55,  106 => 54,  102 => 53,  99 => 52,  95 => 51,  64 => 23,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "news.html.twig", "/var/www/html/EC_shop/templates/admin/news.html.twig");
    }
}
