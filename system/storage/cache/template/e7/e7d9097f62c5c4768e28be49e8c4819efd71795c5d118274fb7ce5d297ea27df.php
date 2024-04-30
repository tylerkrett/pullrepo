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

/* extension/opencart/catalog/view/template/module/latest.twig */
class __TwigTemplate_ba9e9fd11a62e08b6dc654f6d69ea550e5cdfd1ed7df1c794fc23d114a9107e3 extends Template
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
        echo "<section class=\"latest-products clearfix\">
<h3 class=\"page-title\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-bs-target=\"#latest-container\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"latest-container\">
    <span class=\"page-title latest_title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
</div>


<div id=\"latest-container\" class=\"collapse data-toggler show row";
        // line 12
        if ((($context["axis"] ?? null) == "horizontal")) {
            echo "row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-";
        }
        echo "\">
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "    <div class=\"col-12 latest_container\">";
            echo $context["product"];
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  66 => 14,  62 => 13,  56 => 12,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/latest.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\opencart\\catalog\\view\\template\\module\\latest.twig");
    }
}
