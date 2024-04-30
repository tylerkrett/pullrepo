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

/* extension/opencart/catalog/view/template/module/bestseller.twig */
class __TwigTemplate_8434fc115721dbe3369e4f82cdec141e0378dda596d310815191447cd4262b60 extends Template
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
        echo "<section class=\"bestseller-products clearfix\">
<h3 class=\"page-title\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-bs-target=\"#bestseller-container\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"bestseller-container\">
    <span class=\"page-title bestseller_title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
</div>

<div id=\"bestseller-container\" class=\"collapse data-toggler show row";
        // line 11
        if ((($context["axis"] ?? null) == "horizontal")) {
            echo " row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4";
        }
        echo "\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "    <div class=\"col-12 bestseller_container\">";
            echo $context["product"];
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  65 => 13,  61 => 12,  55 => 11,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/bestseller.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\opencart\\catalog\\view\\template\\module\\bestseller.twig");
    }
}
