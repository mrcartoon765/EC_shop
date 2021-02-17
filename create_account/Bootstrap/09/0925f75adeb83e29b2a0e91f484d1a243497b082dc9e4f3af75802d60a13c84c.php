<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* list.html.twig */
class __TwigTemplate_22352cc307477fd7309e72da3639c0023d928fe61f2dcd46ddd2eb69a78cb2c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>会員一覧</title>
</head>
<body>
<table border=\"1\">
<tr>

<th>ID</th>
<th>お名前</th>
<th>メール</th>
<th>性別</th>
<th>登録日時</th>
    <th>編集リンク</th>
</tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 19
            echo "<tr>
<td>
      <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_constant("create_account\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?account_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "account_id", []), "html", null, true);
            echo "\">
      ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "account_id", []), "html", null, true);
            echo "</a>

</td>
<td>
<span style=\"font-size:60%;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "family_name_kana", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "first_name_kana", []), "html", null, true);
            echo "</span><br>
";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "family_name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "first_name", []), "html", null, true);
            echo "

            </td>
<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "email", []), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            if (($this->getAttribute($context["value"], "sex", []) == "1")) {
                echo "男性";
            } elseif (($this->getAttribute($context["value"], "sex", []) == "2")) {
                echo "女性";
            }
            echo "</td>

        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "regist_date", []), "html", null, true);
            echo "</td>


        <td>
<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_constant("create_account\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "update.php?account_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "account_id", []), "html", null, true);
            echo "\">編集</a>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  104 => 37,  97 => 33,  88 => 31,  84 => 30,  76 => 27,  70 => 26,  63 => 22,  57 => 21,  53 => 19,  49 => 18,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "list.html.twig", "/Applications/MAMP/htdocs/portforio/templates/create_account/list.html.twig");
    }
}
