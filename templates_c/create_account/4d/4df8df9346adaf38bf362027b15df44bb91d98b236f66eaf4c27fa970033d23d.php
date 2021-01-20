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

/* detail.html.twig */
class __TwigTemplate_9a56fcbdc9671ac510a9e6dc49f5423c078ecbcb6ab8b454b51834e4274c2d40 extends \Twig\Template
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
  <title>会員登録確認</title>
</head>
<body>
<form method=\"post\" action=\"list.php\">
<table>
        <tr>
        <th>お名前(氏名)</th>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
        <th>お名前(かな)</th>
        <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name_kana", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name_kana", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
        <th>性別</th>
        <td>";
        // line 20
        if (($this->getAttribute(($context["dataArr"] ?? null), "sex", []) == "1")) {
            echo "男性";
        } elseif (($this->getAttribute(($context["dataArr"] ?? null), "sex", []) == "2")) {
            echo "女性";
        }
        echo "</td>
        </tr>
        <tr>
        <th>生年月日</th>
        <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "year", []), "html", null, true);
        echo "年 ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "month", []), "html", null, true);
        echo "月 ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "day", []), "html", null, true);
        echo "日</td>
        </tr>
        <tr>
        <th>郵便番号</th>
        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip1", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip2", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
        <th>住所</th>
        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "address", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
        <th>メールアドレス</th>
        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "email", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
        <th>電話番号</th>
        <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel1", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel2", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel3", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
        <th>備考</th>
        <td>";
        // line 44
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "contents", []), "html", null, true));
        echo "</td>
        </tr>
</table>
<div>

<input type=\"submit\" name=\"back\" value=\"一覧へ戻る\">

</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  106 => 40,  99 => 36,  92 => 32,  83 => 28,  72 => 24,  61 => 20,  52 => 16,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "detail.html.twig", "/var/www/html/portforio/templates/create_account/detail.html.twig");
    }
}
