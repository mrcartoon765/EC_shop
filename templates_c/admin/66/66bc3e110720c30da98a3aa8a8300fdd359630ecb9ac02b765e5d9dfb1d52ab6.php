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

/* books.html.twig */
class __TwigTemplate_b46f887b9c9a3d9a00031fb155553ad276272278a7427123df843524721e308c extends \Twig\Template
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
                    <h3>書籍管理</h3>
                </div>
                <button type=\"button\" class=\"btn btn-blue\" onclick=\"location.href='create_Book_list.php'\">書籍を新規登録する</button>
                <div class=\"list\">
                    <table>
                        <thead>
                            <tr>
                                <th>書籍ID</th>
                                <th>タイトル</th>
                                <th>説明文</th>
                                <th>価格</th>
                                <th>画像</th>
                                <th>発売日</th>
                                <th>関連商材ID</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Books"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 24
            echo "                            <tr>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td><img src=\"../../shopping/image/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"\"></td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "ctg_id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td>
                            <button type=\"button\" class=\"btn btn-green\" onclick=\"location.href='";
            // line 33
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/edit_book.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 33), "html", null, true);
            echo "'\">編集</button>

                            <button type=\"button\" class=\"btn btn-red delete\" data-id='";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 35), "html", null, true);
            echo "' >削除</button>

                            <form method=\"POST\" action=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/delete_Books.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                            <input type=\"hidden\" value='";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "book_id", [], "any", false, false, false, 38), "html", null, true);
            echo "' name=\"book_id\">
                            </form>
                            </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class=\"container\">
            <p>Copyright @ 2021  HEALTH KNOWLEGE</p>
        </div>
    </footer>
    </body>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
   <script>
       \$(\".delete\").click(function(){
           var id = this.dataset.id;
           if(confirm(\"ID:\"+id+\"番の書籍を本当に削除していいですか？\")){
               //OK
               \$(\"#delete_form_\"+id).submit();
           }else{
               //キャンセル
               return false;
           }
       })
   </script>
  </html>";
    }

    public function getTemplateName()
    {
        return "books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  115 => 38,  109 => 37,  104 => 35,  97 => 33,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "books.html.twig", "/var/www/html/EC_shop/templates/admin/books.html.twig");
    }
}
