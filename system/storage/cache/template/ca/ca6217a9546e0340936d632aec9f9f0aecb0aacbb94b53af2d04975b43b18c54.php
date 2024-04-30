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

/* extension/ishitimmerwithimageblock/catalog/view/template/module/ishitimmerwithimageblock.twig */
class __TwigTemplate_a886b9d5fa03528ce06c7300b0860bfdd5982246660ab069145374d30a08172f extends Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishitimmerwithimageblock\" data-counter=\"";
        echo ($context["enddate"] ?? null);
        echo "\" data-deal=\"";
        echo ($context["deal"] ?? null);
        echo "\">
\t\t<div class=\"faq-border row\">
\t\t\t<div class=\"col-xl-6 col-lg-8 col-md-12 col-sm-12 col-xs-12 timer-block\" id=\"timer\" style=\"background-image: url(";
        // line 3
        echo ($context["image2"] ?? null);
        echo ");background-color: ";
        echo ($context["bg_color"] ?? null);
        echo ";\">
\t\t\t\t";
        // line 4
        echo ($context["html"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-8 col-md-12 col-sm-12 col-xs-12 faqbanner\">
\t\t\t\t<div id=\"comparison\">
\t\t\t\t    <figure style=\"background-image: url(";
        // line 8
        echo ($context["afterimage"] ?? null);
        echo ");\">
\t\t\t\t    \t<div class=\"text-2\">After</div>
\t\t\t\t      <div id=\"handle\">
\t\t\t\t      </div>
\t\t\t\t      <div id=\"divisor\" style=\"background-image: url(";
        // line 12
        echo ($context["beforeimage"] ?? null);
        echo ");\">
\t\t\t\t      \t<div class=\"text\">Before</div>
\t\t\t\t      </div>
\t\t\t\t    </figure>
\t\t\t\t    <input type=\"range\" min=\"0\" max=\"100\" value=\"49\" id=\"slider\" oninput=\"moveDivisor()\">
\t\t\t  \t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
\t\t
\t\t<style>
\t\t\t#";
        // line 23
        echo ($context["ishi_randomnumer"] ?? null);
        echo "{
\t\t\t\tbackground-color: ";
        // line 24
        echo ($context["bgcolor"] ?? null);
        echo "
\t\t\t}
\t\t</style>
\t\t<script type=\"text/javascript\">
\t\t\t\$(document).on(\"click\",\"[data-toggle='collapse']\",function() {
\t\t\t    var parent = \$(this).data(\"parent\");
\t\t\t    var target = \$(this).data(\"href\");
\t\t\t    if(\$(parent).length && \$(parent).hasClass('panel-group')) {
\t\t\t     \$(parent+\" .panel\").each(function() {
\t\t\t       var p = \$(this).find(\"[data-toggle='collapse']\");
\t\t\t       var t = p.data(\"href\");
\t\t\t       if(t!= target && p.attr(\"aria-expanded\") == \"true\") {
\t\t\t        \$(t).slideUp().removeClass(\"in\");
\t\t\t        p.addClass(\"ishi-collapsed\").attr(\"aria-expanded\",\"false\");
\t\t\t       }
\t\t\t     });
\t\t\t    }
\t\t\t    if(\$(this).attr(\"aria-expanded\") == \"false\") {
\t\t\t      \$(target).slideDown().addClass(\"in\");
\t\t\t      \$(this).removeClass(\"ishi-collapsed\").attr(\"aria-expanded\",\"true\");
\t\t\t    } else {
\t\t\t      \$(target).slideUp().removeClass(\"in\");
\t\t\t      \$(this).addClass(\"ishi-collapsed\").attr(\"aria-expanded\",\"false\");
\t\t\t    }
\t\t\t  });

\t\t\tvar divisor = document.getElementById(\"divisor\"),
\t\t\t    handle = document.getElementById(\"handle\"),
\t\t\t    slider = document.getElementById(\"slider\");
\t\t\t\tfunction moveDivisor() {
\t\t\t\t  handle.style.left = slider.value+\"%\";
\t\t\t\t\tdivisor.style.width = slider.value+\"%\";
\t\t\t\t}
\t\t\twindow.onload = function() {
\t\t\t\tmoveDivisor();
\t\t\t};
\t\t</script>
</section>

<style>
</style>


";
    }

    public function getTemplateName()
    {
        return "extension/ishitimmerwithimageblock/catalog/view/template/module/ishitimmerwithimageblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 23,  67 => 12,  60 => 8,  53 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishitimmerwithimageblock/catalog/view/template/module/ishitimmerwithimageblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishitimmerwithimageblock\\catalog\\view\\template\\module\\ishitimmerwithimageblock.twig");
    }
}
