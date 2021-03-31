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

/* confirm.html.twig */
class __TwigTemplate_d5ec9f3465d78acb1829c26085202be20361f2a5be78b89a756b4a1f7eb6d2ea extends \Twig\Template
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

";
        // line 3
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "

<body>
\t<main>
\t\t<div class=\"wrapper last-wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wrapper-title\">
\t\t\t\t\t<h3>CONFIRM</h3>
\t\t\t\t\t<p>お問い合わせ内容確認</p>
\t\t\t\t</div>

\t\t\t\t<form method=\"POST\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_constant("config\\Bootstrap::APP_URL"), "html", null, true);
        echo "/Contact/send.php\" class=\"conf-form\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<p>お名前 *</p>
\t\t\t\t\t\t<p>";
        // line 17
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<input type=\"hidden\" name=\"name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t";
        // line 19
        if ((($context["name"] ?? null) == "")) {
            // line 20
            echo "\t\t\t\t\t\t\t<p class=\"error\">名前が入力されていません</p>
\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<p>Email *</p>
\t\t\t\t\t<p>";
        // line 27
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t<input type=\"hidden\" name=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 29
        if ((($context["email"] ?? null) == "")) {
            // line 30
            echo "\t\t\t\t\t\t<p class=\"error\">メールアドレスが入力されていません</p>
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<p>お問い合わせ内容 *</p>
\t\t\t\t<p>";
        // line 37
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t<input type=\"hidden\" name=\"text\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 39
        if ((($context["text"] ?? null) == "")) {
            // line 40
            echo "\t\t\t\t\t<p class=\"error\">お問い合わせ内容が入力されていません</p>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t</p>
\t\t</div>

\t\t";
        // line 45
        if (((("name" != "") && ("email" != "")) && ("text" != ""))) {
            // line 46
            echo "\t\t\t<p>この内容で送信してよろしいですか？</p>
\t\t\t<button type=\"submit\" class=\"btn btn-submit\">送信する</button>
\t\t";
        } else {
            // line 49
            echo "\t\t\t<button class=\"btn btn-reutrn\">戻る</button>
\t\t";
        }
        // line 51
        echo "\t</form>
</body></div></div></main></body>";
        // line 52
        echo twig_escape_filter($this->env, ($context["footer"] ?? null), "html", null, true);
        echo "</html>
";
    }

    public function getTemplateName()
    {
        return "confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  133 => 51,  129 => 49,  124 => 46,  122 => 45,  117 => 42,  113 => 40,  111 => 39,  107 => 38,  103 => 37,  96 => 32,  92 => 30,  90 => 29,  86 => 28,  82 => 27,  75 => 22,  71 => 20,  69 => 19,  65 => 18,  61 => 17,  55 => 14,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm.html.twig", "/var/www/html/EC_shop/templates/Contact/confirm.html.twig");
    }
}
