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
        echo "    <main>
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"wrapper-title\">
                    <h3>会員管理</h3>
                </div>
                <button type=\"bnutton\" class='btn btn-blue' onclick=\"location.href='";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/create_dm.php'\">メルマガ配信</button>
                <button type=\"button\" class=\"btn btn-gray\" onclick=\"location.href='";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/download.php'\">CSV出力</button>
                <form class=\"serch\" action=\"";
        // line 9
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 26
            echo "                            <tr>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "first_name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "mail", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "dm", [], "any", false, false, false, 30) == 1)) {
                // line 31
                echo "                                    <td>受信する</td>
                                    ";
            } else {
                // line 33
                echo "                                    <td>受信しない</td>
                                ";
            }
            // line 35
            echo "                                <td>
                                    <button type=\"button\" class=\"btn btn-green\" onclick=\"location.href='";
            // line 36
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/edit_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "'\">編集</button>
                                    <button type=\"button\" class=\"btn btn-red delete\" data-id='";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "' >削除</button>
                                    
                                    <form method=\"POST\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "/delete_user.php\" id=\"delete_form_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" value='";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "' name=\"id\">
                                    </form>
                                </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                    </table>
                    <ul class=\"paging\">
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "/users.php?first_name=";
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo "\">« 最初</a></li>

                    ";
        // line 50
        if ((($context["prev"] ?? null) != "")) {
            // line 51
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
        // line 53
        echo "
                    <li><span>";
        // line 54
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</span></li>

                    ";
        // line 56
        if ((($context["next"] ?? null) != "")) {
            // line 57
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
        // line 59
        echo "
                    <li><a href=\"";
        // line 60
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
            <p>Copyright @ 2021  HEALTH KNOWLEGE</p>
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
        return array (  185 => 60,  182 => 59,  170 => 57,  168 => 56,  163 => 54,  160 => 53,  146 => 51,  144 => 50,  137 => 48,  132 => 45,  121 => 40,  115 => 39,  110 => 37,  104 => 36,  101 => 35,  97 => 33,  93 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  76 => 26,  72 => 25,  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "users.html.twig", "/var/www/html/EC_shop/templates/admin/users.html.twig");
    }
}
