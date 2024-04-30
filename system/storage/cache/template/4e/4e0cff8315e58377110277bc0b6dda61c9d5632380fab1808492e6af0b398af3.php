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

/* extension/ishiaboutusblock/catalog/view/template/module/ishiaboutusblock.twig */
class __TwigTemplate_aa93bd604c7c49badad78e20d1085a048b2cc2c0619101aa3636af1372c0b528 extends Template
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
        echo "\" class=\"ishiaboutusblock\">
\t\t<div class=\"aboutus_banner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-12 col-12 aboutus-image aboutusimage-position-";
        // line 5
        echo ($context["position"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t\t<a href=\"#\" class=\" ";
        // line 7
        echo ($context["style1"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 8
        echo ($context["image"] ?? null);
        echo "\" class=\"img-fluid\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-12 col-12 aboutus-details\">
\t\t\t\t\t\t";
        // line 13
        echo ($context["html"] ?? null);
        echo "
\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t          \t<a href=\"";
        // line 15
        echo ($context["btnlink"] ?? null);
        echo "\" class=\"btn-primary\">
\t\t\t\t\t            ";
        // line 16
        echo ($context["btnname"] ?? null);
        echo "
\t\t\t\t          \t</a>
\t\t\t\t        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishiaboutusblock/catalog/view/template/module/ishiaboutusblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  67 => 15,  62 => 13,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiaboutusblock/catalog/view/template/module/ishiaboutusblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishiaboutusblock\\catalog\\view\\template\\module\\ishiaboutusblock.twig");
    }
}
