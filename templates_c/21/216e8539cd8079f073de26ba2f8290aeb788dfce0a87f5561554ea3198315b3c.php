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

/* common/footer.html.twig */
class __TwigTemplate_a9d77b69684f7551d64c294428258028c7e90a55e6813567101b5b032d1fa95c extends \Twig\Template
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
        echo "<footer class=\"fixed-bottom\">
\t<div class=\"container\">
\t\t<p>Copyright @ 2021  HEALTH KNOWLEGE</p>
\t</div>
</footer>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
\t\$(function () {
\$('.toggle').click(function () {
\$(\"header\").toggleClass('open');
\$(\".sp-menu\").slideToggle(500);
});
});
</script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>
<script>
\t\$(\".delete\").click(function () {
var id = this.dataset.id;
if (confirm(\"ID:\" + id + \"番のコンテンツを本当に削除していいですか？\")) { // OK
\$(\"#delete_form_\" + id).submit();
} else { // キャンセル
return false;
}
})
</script></body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/footer.html.twig", "/var/www/html/EC_shop/templates/common/footer.html.twig");
    }
}
