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

/* extension/ishiparallaxblock/catalog/view/template/module/ishiparallaxblock.twig */
class __TwigTemplate_62bfb3255339a05d3d2441a8cf0d8f13ce13c4baa0289ad67a86da3367514c65 extends Template
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
        echo "\" class=\"ishiparallaxbannerblock ";
        echo ($context["parallax"] ?? null);
        echo "\" style=\"background-color: ";
        echo ($context["bg_color"] ?? null);
        echo "\" data-counter=\"";
        echo ($context["enddate"] ?? null);
        echo "\" data-deal=\"";
        echo ($context["deal"] ?? null);
        echo "\">
\t<div class=\"parallax_banner\" style=\"\">
\t\t<div class=\"container\">
\t\t\t";
        // line 4
        echo ($context["html"] ?? null);
        echo "
\t\t</div>
\t</div>
</section>
<style type=\"text/css\">
\t@media (min-width: 768px){
    \t.ishiparallaxbannerblock{
\t     background-image: url(";
        // line 11
        echo ($context["image"] ?? null);
        echo ")!important;}}
</style>";
    }

    public function getTemplateName()
    {
        return "extension/ishiparallaxblock/catalog/view/template/module/ishiparallaxblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  52 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiparallaxblock/catalog/view/template/module/ishiparallaxblock.twig", "C:\\xampp\\htdocs\\OPC001L01_2.3\\extension\\ishiparallaxblock\\catalog\\view\\template\\module\\ishiparallaxblock.twig");
    }
}
